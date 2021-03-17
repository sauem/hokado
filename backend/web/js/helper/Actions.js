const {message} = antd;

const onRemoveMedia = async (media_id) => {
    try {
        return await Server.post(ROUTE.AJAX.REMOVE_MEDIA, {media_id});
    } catch (e) {
        message.error(e.message);
    }
}
const onUploadMedia = (file, successCallback, errorCallBack, onUploadProgress, type = MEDIA_TYPE_ARCHIVE) => {
    let formData = new FormData();
    formData.append('imageFile', file);
    formData.append('fileType', FILE_TYPE_IMAGE);
    formData.append('type', type);
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
const getPaginate = headers => {
    return {
        current: headers['x-pagination-current-page'],
        totalPage: headers['x-pagination-page-count'],
        pageSize: headers['x-pagination-per-page'],
        total: headers['x-pagination-total-count'],
    }
}
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
                    expand: 'avatar,children',
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
    },
    view: async (id) => {
        try {
            const {data} = await Server.get(`${ROUTE.ARCHIVE.VIEW}?id=${id}`).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
}
const Articles = {
    create: async (article) => {
        try {
            const {data} = await Server.post(ROUTE.ARTICLE.CREATE, article).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
        return false;
    },
    view: async (id) => {
        try {
            return await Server.get(ROUTE.ARTICLE.VIEW + `?id=${id}`, {
                params: {
                    expand: 'media,avatar,meta',
                }
            }).catch(axiosCatch);
            ;
        } catch (e) {
            message.error(e.message);
        }
        return false;
    },
    update: async (article) => {
        try {
            const {data} = await Server.put(ROUTE.ARTICLE.UPDATE + `?id=${article.id}`, article).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
        return false;
    },
    delete: async (id) => {
        try {
            const {data} = await Server.delete(`${ROUTE.ARTICLE.DELETE}?id=${id}`).catch(axiosCatch);
            message.success('Xóa bài viết thành công!');
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    fetch: async (params) => {
        try {
            const res = await Server.get(ROUTE.ARTICLE.INDEX, {
                params: {
                    ...params,
                    expand: 'archive',
                    sort: '-created_at'
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
const Banners = {
    create: async (banner) => {
        try {
            const {data} = await Server.post(ROUTE.BANNER.CREATE, banner).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    update: async (banner) => {
        try {
            const {data} = await Server.put(ROUTE.BANNER.UPDATE + `?id=${banner.id}`, banner).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    delete: async (id) => {
        try {
            const {data} = await Server.delete(`${ROUTE.BANNER.DELETE}?id=${id}`).catch(axiosCatch);
            message.success('Xóa banner thành công!');
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    fetch: async (params) => {
        try {
            const res = await Server.get(ROUTE.BANNER.INDEX, {
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
const Attributes = {
    create: async (attr) => {
        try {
            const {data} = await Server.post(ROUTE.ATTRIBUTE.CREATE, attr).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    update: async (attr) => {
        try {
            const {data} = await Server.put(ROUTE.ATTRIBUTE.UPDATE + `?id=${attr.id}`, attr).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    delete: async (id) => {
        try {
            const {data} = await Server.delete(`${ROUTE.ATTRIBUTE.DELETE}?id=${id}`).catch(axiosCatch);
            message.success('Xóa thuộc tính thành công!');
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    view: async (id) => {
        try {
            const {data} = await Server.get(`${ROUTE.ATTRIBUTE.VIEW}?id=${id}`).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    fetch: async (params) => {
        try {
            const res = await Server.get(ROUTE.ATTRIBUTE.INDEX, {
                params: {
                    ...params,
                    sort: '-created_at',
                    expand: 'variants',
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
const Variants = {
    create: async (attr) => {
        try {
            const {data} = await Server.post(ROUTE.VARIANT.CREATE, attr).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    update: async (attr) => {
        try {
            const {data} = await Server.put(ROUTE.VARIANT.UPDATE + `?id=${attr.id}`, attr).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    delete: async (id) => {
        try {
            const {data} = await Server.delete(`${ROUTE.VARIANT.DELETE}?id=${id}`).catch(axiosCatch);
            message.success('Xóa biến thể thành công!');
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    fetch: async (params) => {
        try {
            const res = await Server.get(ROUTE.VARIANT.INDEX, {
                params: {
                    ...params,
                    sort: '-created_at',
                    expand: 'attribute',
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
const Users = {
    create: async (user) => {
        try {
            const {data} = await Server.post(ROUTE.USER.CREATE, user).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    update: async (user) => {
        try {
            const {data} = await Server.put(ROUTE.USER.UPDATE + `?id=${user.id}`, archive).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    delete: async (id) => {
        try {
            const {data} = await Server.delete(`${ROUTE.USER.DELETE}?id=${id}`).catch(axiosCatch);
            message.success('Xóa danh mục thành công!');
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    fetch: async (params) => {
        try {
            const res = await Server.get(ROUTE.USER.INDEX, {
                params: {
                    ...params,
                    sort: '-created_at',
                    expand: 'role',
                    "per-page": 6
                }
            }).catch(axiosCatch);
            const {data, headers} = res;
            const pagination = getPaginate(headers);
            return {data, pagination};
        } catch (e) {
            message.error(e.message);
        }
    }
}
const Settings = {
    save: async (setting) => {
        try {
            const {data} = await axios.create({
                headers: {
                    'Content-Type': 'application/json',
                },
            }).post('/site/settings', setting).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    }
}
const Products = {
    create: async (product) => {
        try {
            const {data} = await Server.post(ROUTE.PRODUCT.CREATE, product).catch(axiosCatch);
            console.log(data);
            message.success('Tạo sản phẩm thành công!');
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    update: async (product) => {
        try {
            const {data} = await Server.put(ROUTE.PRODUCT.UPDATE + `?id=${product.id}`, product).catch(axiosCatch);
            message.success('Cập nhật sản phẩm thành công!');
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    delete: async (id) => {
        try {
            const {data} = await Server.delete(`${ROUTE.PRODUCT.DELETE}?id=${id}`).catch(axiosCatch);
            message.success('Xóa sản phẩm thành công!');
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
    fetch: async (params) => {
        try {
            const res = await Server.get(ROUTE.PRODUCT.INDEX, {
                params: {
                    ...params,
                    sort: '-created_at',
                    expand: 'avatar,archives,thumbs',
                    "per-page": 20
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
    },
    view: async (id) => {
        try {
            const {data} = await Server.get(`${ROUTE.PRODUCT.VIEW}?id=${id}`).catch(axiosCatch);
            return data;
        } catch (e) {
            message.error(e.message);
        }
    },
}
