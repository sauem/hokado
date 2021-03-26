Array.prototype.getColumn = (key => {
    return this.map(item => {
        return item[key];
    });
});
const axiosCatch = (error) => {
    if (error.response) {
        // The request was made and the server responded with a status code
        // that falls out of the range of 2xx
        console.error('Response data', error.response.data);
        console.error('Response status', error.response.status);
        console.error('Response header', error.response.headers);
        const {data} = error.response;
        let msg = data.message;
        if (typeof msg === 'undefined' && Array.isArray(data)) {
            msg = data[0].message;
        }
        throw {
            data: error.response.data,
            message: msg,
        };
    } else if (error.request) {
        // The request was made but no response was received
        // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
        // http.ClientRequest in node.js
        console.error('Request', error.request);
        throw {
            message: error.message,
        };
    } else {
        // Something happened in setting up the request that triggered an Error
        console.error('Error', error.message);
        throw {
            message: error.message,
        };
    }
};

const Server = axios.create({
    baseURL: BASE_URL + 'api',
    headers: {
        'Content-Type': 'application/json',
    },
});

const toSlug = (str) => {
    let slug = str.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    return slug;
}

function treeLoop(args = []) {
    if (args.length <= 0) {
        return null;
    }

}

function getObjectValue(val, obj, getKey = false) {
    let key = obj.findIndex(item =>
        item.value === val || item.id === val || item.slug === val || item.lang === val
    );
    if (getKey) {
        return key;
    }
    return obj[key];
}


function convertTreeSelect(array) {
    let arr = [];
    if (array) {
        array.map(item => arr.push({
            title: item.name,
            key: item.id,
            type: item.type,
            value: item.id,
            children: convertTreeSelect(item.children)
        }));
    }
    return arr;
}

function getParams(name) {
    let url = new URLSearchParams(window.location.search);
    return url.get(name);
}

function initTinymce(callback) {
    // let useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

    tinymce.init({
        selector: 'textarea.editor',
        plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker imagetools textpattern noneditable help formatpainter permanentpen pageembed charmap mentions quickbars linkchecker emoticons advtable',
        tinydrive_token_provider: (success, failure) => {
            return fetch('/jwt', {
                method: 'GET',
                // headers: {
                //     'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MTUyMjcyMjQsIm5iZiI6MTYxNzgxOTIyNCwiZXhwIjoxNjE3ODE5MjI0LCJ1aWQiOjF9.bEHbA7lM2lAe23Jm6mnriZTxDn5eB6V9FJC6C-nZ_kE'
                // }
            });
        },
        // tinydrive_dropbox_app_key: 'YOUR_DROPBOX_APP_KEY',
        //Client secret : f3qxGcKzmedcugkyBVdmuFss
        tinydrive_google_drive_key: 'AIzaSyA7eNIKKZ8p8opmrVGgpXfqT-qpBnxr6ZU',
        tinydrive_google_drive_client_id: '858328145650-fo8uhfbs3m2am2lqovacbs5l2ke39a1m.apps.googleusercontent.com',
        images_upload_url: BASE_URL + ROUTE.UPLOAD,
        file_picker_callback: function (cb, value, meta) {
            let input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            input.onchange = function () {
                let file = this.files[0];
                onUploadMedia(file, data => {
                    cb(`/static${data.path}`, {title: file.name});
                }, null, (e) => {
                    console.log(e);
                });
            };

            input.click();
        },
        mobile: {
            plugins: 'print preview powerpaste casechange importcss tinydrive searchreplace autolink autosave save directionality advcode visualblocks visualchars fullscreen image link media mediaembed template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists checklist wordcount tinymcespellchecker a11ychecker textpattern noneditable help formatpainter pageembed charmap mentions quickbars linkchecker emoticons advtable'
        },
        menubar: 'file edit view insert format tools table tc help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        importcss_append: true,
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        spellchecker_ignore_list: ['Ephox', 'Moxiecode'],
        content_style: '.mymention{ color: gray; }',
        contextmenu: 'link image imagetools table configurepermanentpen',
        a11y_advanced_options: true,
        setup: function (ed) {
            ed.on('keyup', function (e) {
                callback(ed.getBody().innerHTML);
            });
            ed.on('Change', function (e) {
                callback(ed.getBody().innerHTML);
            });
        }
    });

}

function initSortable() {
    $('#menu-sortable').nestable({
        maxDepth: 2,
        emptyClass: ''
    });
}
