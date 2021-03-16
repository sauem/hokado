function defaultImage(el) {
    $(el).attr('src', 'https://pinkladies24-7.com/assets/images/defaultimg.png');
}

function HandleUpload(element) {
    let key = $(element).data('key'),
        parentArea = $(element).closest('.upload-area');
    this.rules = {
        maxSize: 2000000,
        type: 'image/*',
    }

    this.onChoseFile = () => {
        let file = $(element)[0].files[0];
        onUploadMedia(file, res => {
            console.log(res);
            this.setMediaId(res);
        }, error => {
            console.log(error);
        }, evt => {
            console.log(evt);
        }, key);
    }
    this.setMediaId = ({id, path, type}) => {
        parentArea.find(`img#${type}`).attr('src', `/static/${path}`);
        parentArea.find(`input[name="${type}"]`).val(id);
        this.showAction();
    }
    this.showAction = () => {
        parentArea.closest('.actions').css({'display': 'flex'});
    }
    this.hideAction = () => {

    }
    this.showLoading = () => {

    }
    this.hideLoading = () => {

    }

    this.removeImage = () => {

    }
}
