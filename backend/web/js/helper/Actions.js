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
            const {data} = await Server.get(ROUTE.ARCHIVE.INDEX, {params: params}).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    }
}

const onUploadMedia = (file, successCallback, errorCallBack) => {
    let formData = new FormData();
    formData.append('imageFile', file);
    formData.append('fileType', 1);
    axios.create({
        baseURL: BASE_URL,
        headers: {
            'Content-Type': 'multipart/form-data',
        }
    }).post(ROUTE.UPLOAD, formData)
        .then((res) => {
            if (successCallback) {
                console.log(res);
                successCallback(res.data);
            }
        })
        .catch((e) => {
            if (errorCallBack) {
                errorCallBack(e);
            }
        });
};
