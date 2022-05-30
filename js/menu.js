class Menu extends Class_Father{
    constructor(elem) {
        super(elem);
        this.elem = $(elem);
        this.buttons = this.find('.button');

        this.events();
    }
    toggle_buttons(){
        this.buttons.map((idx, val) => {
            $(val).hasClass('show') ? $(val).removeClass('show') : $(val).addClass('show');
        });
    }

    events(){
        this.buttons.on('click', this.toggle_buttons.bind(this));
    };
}