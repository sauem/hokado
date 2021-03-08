const FILE_TYPE_IMAGE = 'image';
const FILE_TYPE_VIDEO = 'video';
const FILE_TYPE_BASE64 = 'base64';
const MEDIA_TYPE_ARCHIVE = 'archive';
const MEDIA_TYPE_PRODUCT = 'product';
const MEDIA_TYPE_BANNER = 'banner';
// Loại danh mục
const ARCHIVE_TYPE_BLOG = 'article';
const ARCHIVE_TYPE_PRODUCT = 'product';
// Ngôn ngữ
const LANG_VI = 'vi';
const LANG_EN = 'en';
const DEVICE_DESKTOP = 'desktop';
const DEVICE_MOBILE = 'mobile';
const POSITION_HOME_SLIDER = 'home_slider';
const POSITION_TOP_HEADER = 'top_header';
const POSITION_SIDEBAR_LEFT_TOP = 'sidebar_left_top';
const POSITION_SIDEBAR_LEFT_BOTTOM = 'sidebar_left_bottom';
const POSITION_SIDEBAR_RIGHT_TOP = 'sidebar_right_top';
const POSITION_SIDEBAR_RIGHT_BOTTOM = 'sidebar_right_bottom';
const POSITION_TOP_FOOTER = 'top_footer';
//Banner
const BANNER_PAGES = [
    {
        name: 'Trang chủ',
        slug: 'home'
    },
    {
        name: 'Danh mục',
        slug: 'archive'
    },
    {
        name: 'Sản phẩm',
        slug: 'product'
    },
    {
        name: 'Bài viết',
        slug: 'article'
    },
];
const BANNER_TYPES = [
    {name: 'Hỉnh ảnh', slug: FILE_TYPE_IMAGE},
    {name: 'Video', slug: FILE_TYPE_VIDEO},
];
const BANNER_POSITIONS = [
    {
        name: 'Slider trang chủ',
        slug: POSITION_HOME_SLIDER
    },
    {
        name: 'Header trên cùng',
        slug: POSITION_TOP_HEADER
    },
    {
        name: 'Cột trái - Trên',
        slug: POSITION_SIDEBAR_LEFT_TOP
    },
    {
        name: 'Cột trái - Dưới',
        slug: POSITION_SIDEBAR_LEFT_BOTTOM
    },
    {
        name: 'Cột phải - Trên',
        slug: POSITION_SIDEBAR_RIGHT_TOP
    },
    {
        name: 'Cột phải - Dưới',
        slug: POSITION_SIDEBAR_RIGHT_BOTTOM
    },
    {
        name: 'Trên footer',
        slug: POSITION_TOP_FOOTER
    },
];
const BANNER_DEVICES = [
    {name: 'Desktop', slug: DEVICE_DESKTOP},
    {name: 'Mobile', slug: DEVICE_MOBILE},
];
const LANGUAGES = [
    {
        lang: LANG_VI,
        name: 'Tiếng Việt',
        code: 'VN',
        currency: 'đ'
    },
    {
        name: 'Tiếng Anh',
        lang: LANG_EN,
        code: 'US',
        currency: '$'
    },
]


// Router API
const BASE_URL = '/';
const ROUTE = {
    AJAX: {
        REMOVE_MEDIA: 'default/remove-media'
    },
    ARCHIVE: {
        INDEX: 'archive/index',
        CREATE: 'archive/create',
        UPDATE: 'archive/update',
        DELETE: 'archive/delete'
    },
    BANNER: {
        INDEX: 'banner/index',
        CREATE: 'banner/create',
        UPDATE: 'banner/update',
        DELETE: 'banner/delete'
    },
    UPLOAD: 'api/upload'
}

