export default (user) => ({
    open: false,
    user: user,
    init() {
        Echo.private(`App.Models.User.${this.user.id}`)
            .notification((notification) => {
                console.log(notification)
                this.open = true
                setTimeout(() => {
                    this.open = false
                }, 5000);
            })
    }
})
