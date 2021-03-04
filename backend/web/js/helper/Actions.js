const {message} = antd;

const Archives = {
    create: async (archive) => {
        try {
            const {data} = await Server.post(ROUTE.ARCHIVE.CREATE, archive).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    update: async (archive) => {
        try {
            const {data} = await Server.put(ROUTE.ARCHIVE.UPDATE + `?id=${archive.id}`, archive).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    delete: async (id) => {
        try {
            const {data} = await Server.delete(`${ROUTE.ARCHIVE.DELETE}?id=${id}`).catch(axiosCatch);
            message.success('Xóa danh mục thành công!');
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    fetch: async (params) => {
        try {
            const res = await Server.get(ROUTE.ARCHIVE.INDEX, {
                params: {
                    ...params,
                    sort: '-created_at',
                    expand: 'avatar',
                    "per-page": 6
                }
            }).catch(axiosCatch);
            const {data, headers} = res;
            const current = headers['x-pagination-current-page'],
                totalPage = headers['x-pagination-page-count'],
                pageSize = headers['x-pagination-per-page'],
                total = headers['x-pagination-total-count'],
                pagination = {
                    total, current, pageSize, totalPage
                };
            return {data, pagination};
        } catch (e) {
            message.error(e.message);
        }
    }
}

const onUploadMedia = (file, successCallback, errorCallBack, onUploadProgress) => {
    let formData = new FormData();
    formData.append('imageFile', file);
    formData.append('fileType', FILE_TYPE_IMAGE);
    formData.append('type', MEDIA_TYPE_ARCHIVE);
    axios.create({
        baseURL: BASE_URL,
        headers: {
            'Content-Type': 'multipart/form-data',
        },
        onUploadProgress: event => onUploadProgress(event)
    }).post(ROUTE.UPLOAD, formData)
        .then((res) => {
            if (successCallback) {
                successCallback(res.data);
            }
        })
        .catch((e) => {
            if (errorCallBack) {
                errorCallBack(e);
            }
        });
};
