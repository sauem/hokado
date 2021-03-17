function switchLanguage(lang) {
    this.setLang = async (lang) => {
        return $.ajax({
            url: '/site/switch-language',
            data: {lang},
            type: 'POST',
            cache: false
        })
    }
    try {
        Swal.fire({
            title: 'Switching language...',
            icon: 'info',
            showConfirmButton: false,
            type: 'info',
            willOpen: async () => {
                Swal.showLoading();
                const res = await this.setLang(lang);
                setTimeout(() => window.location.reload(), 1000);
            }
        });
    } catch (e) {

    }
}
