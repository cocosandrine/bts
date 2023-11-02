/**
 * General
 */

function reload_page(interval) {
    if (interval === undefined) {
        interval = 2000
    }
    setTimeout(function () {
        window.location.reload();
    }, interval);
}

function reload_page_immediately() {
    reload_page(0);
}


/**
 ** Footer.php
 */
const footer = document.querySelector("footer");
const placeholder = document.createElement("div");


calcMarge = function () {
    placeholder.style.height = footer.getBoundingClientRect().height + "px";
    placeholder.classList.add("mt-2")
    footer.parentElement.append(placeholder);
}


/**
 *
 * @index.php
 */

const btn_cats = document.querySelectorAll(".btn_cat");
const btn_cards = document.querySelectorAll(".btn-card");

btn_cats.forEach(btn_cat => {
    btn_cat.addEventListener("click", function () {
        btn_cat.querySelector("form").submit();
    })
})

btn_cards.forEach(btn => {

    btn.addEventListener('click', function () {
        let action_type;
        const form_card = new XMLHttpRequest();
        form_card.open("POST", "partials/actions.php");
        form_card.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        if (btn.classList.contains("btn-success")) {
            action_type = "id_food_add";
        } else {
            action_type = "id_food_remove";
        }

        form_card.send(action_type + "=" + btn.value);

        form_card.addEventListener("readystatechange", function () {
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    //request is success
                    if (btn.classList.contains("btn-success")) {
                        btn.classList.remove("btn-success");
                        btn.classList.add("btn-danger");
                        btn.innerHTML = '<i  class=" bi bi-cart4"></i> Retirer du panier';

                    } else {
                        btn.classList.remove("btn-danger");
                        btn.classList.add("btn-success");
                        btn.innerHTML = '<i  class=" bi bi-cart4"></i> Ajouter au panier';
                    }
                }
            }
        )


    })
})


/**
 * panier.php
 */

let btn_remove_cards = document.querySelectorAll(".btn-remove-card");
let input_prices = document.querySelectorAll(".price_food");
const btn_command = document.getElementById("btn-command");
const form_command = document.getElementById("form-command");
const input_price_command = document.getElementById("price-command");
let input_quantity_cards = document.querySelectorAll(".input-quantity-card");

const form_login = document.getElementById("form-login");
let isAuth = false;

/**
 *
 * @param form HTMLElement
 * @return String
 */

function encodeForPHP(form) {
    const formData = new FormData(form);
    let params = "";
    for (let entry of formData.keys()) {
        params += encodeURI(entry) + "=" + encodeURI(formData.get(entry).toString()) + "&";

    }
    return params;
}

form_login?.addEventListener("submit", function (event) {

    if (!isAuth) {
        //arrêter la soumission de la commande
        event.preventDefault();
        event.stopPropagation();

        const form_login_x = new XMLHttpRequest();
        form_login_x.open("POST", "partials/actions.php");
        form_login_x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        form_login_x.send(encodeForPHP(form_login));

        form_login_x.addEventListener("readystatechange", function () {
                if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                    if (form_login_x.responseText.includes("successfully")) {
                        isAuth = true;
                        form_command?.submit();
                        toastr.success("Connexion réussie ! ");
                        reload_page();
                    } else {
                        toastr.error("Connexion impossible ! ")
                    }

                }
            }
        );
    }

})

form_command?.addEventListener("submit", function (event) {
    //arrêter l'évènement
    event.preventDefault();
    event.stopPropagation();

    const form_check_auth = new XMLHttpRequest();
    form_check_auth.open("POST", "partials/actions.php");
    form_check_auth.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    form_check_auth.send("check_auth");

    form_check_auth.addEventListener("readystatechange", function () {
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {

                if (form_check_auth.responseText === "connected successfully") {
                    toastr.info("Connexion au compte précédemment utilisé réussie ! ");
                    form_command.submit();
                }
                // open the modal if the user is not connected
                else {
                    document.getElementById("btn_login_modal").click();
                }

            }
        }
    );

})

btn_remove_cards.forEach(btn => {
    btn.addEventListener('click', function () {

        const form_card = new XMLHttpRequest();
        form_card.open("POST", "partials/actions.php");
        form_card.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        form_card.send("id_food_remove=" + btn.querySelector("p").innerText);

        form_card.addEventListener("readystatechange", function () {

                if (form_card.readyState === XMLHttpRequest.DONE && form_card.status === 200) {

                    //remove element in the html
                    btn.parentElement.parentElement.remove();

                    //recount the element
                    btn_remove_cards = document.querySelectorAll(".btn-remove-card");

                    //reevaluate the new card price
                    calcPrice()

                    //disable btn command if the card is empty and if it was not dis
                    if (btn_remove_cards.length === 0 && !btn_command.classList.contains("disabled")) {
                        btn_command.classList.add("disabled");
                        toastr.warning("Vous n'avez aucun food dans le panier pour passer une commande ! ", "Oups !")

                    }


                }
            }
        )


    })
})

function calcPrice() {
    if (input_price_command !== null) {
        input_prices = document.querySelectorAll(".price_food");
        let price_command = 0;
        input_prices.forEach(input_price => {
            const quantity = input_price.parentElement.querySelector(".input-quantity-card").value;
            const price = parseInt(input_price.innerHTML.slice(0, input_price.innerHTML.length - 5).replaceAll(" ", ""));

            price_command += price * quantity;

        });

        input_price_command.innerHTML = "Total : " + price_command.toLocaleString("fr-FR") + " F cfa";

    }
}


input_quantity_cards.forEach(input => {
    input.addEventListener("change", function () {
        calcPrice()
    })
})


/**
 * Menu.php
 */
const btn_disconnect = document.getElementById("btn_disconnect");
btn_disconnect.addEventListener("click", function () {
    window.location.href = "logout.php";
})


/**
 * admin.php
 */
const input_img_cat = document.getElementById("nom_image_cat");
const input_img_food = document.getElementById("nom_image_food");
const admin_menu_options = document.querySelectorAll(".admin-menu-option");
const btn_reload = document.getElementById("btn-reload");
const btn_statut_cmd = document.querySelectorAll(".btn-statut-cmd");

const btn_del_users = document.querySelectorAll(".btn-del-user");
const btn_confirm_del_user = document.getElementById("btn-confirm-del-user");


const btn_del_cmd = document.querySelectorAll(".btn-del-cmd");
const btn_confirm_del_cmd = document.getElementById("btn-confirm-del-cmd");

const btn_del_admins = document.querySelectorAll(".btn-del-admin");
const btn_confirm_del_admin = document.getElementById("btn-confirm-del-admin");

const btn_del_cats = document.querySelectorAll(".btn-del-cat");
const btn_confirm_del_cat = document.getElementById("btn-confirm-del-cat");

const btn_edit_cats = document.querySelectorAll(".btn-edit-cat");
const input_edit_img_cat = document.getElementById("edit_img_cat");
const input_edit_nom_img_cat = document.getElementById("edit_nom_image_cat");
const edit_titre_cat = document.getElementById("edit_titre_cat");
const edit_image_cat_old_name = document.getElementById("edit_image_cat_old_name");
const edit_cat_id = document.getElementById("edit_cat_id");


const btn_edit_foods = document.querySelectorAll(".btn-edit-food");
const edit_titre_food = document.getElementById("edit_titre_food");
const edit_prix = document.getElementById("edit_prix");
const input_edit_img_food = document.getElementById("edit_img_food");
const input_edit_nom_img_food = document.getElementById("edit_nom_image_food");
const edit_id_cat_food = document.getElementById("edit_id_cat_food");
const edit_description = document.getElementById("edit_description");
const edit_image_food_old_name = document.getElementById("edit_image_food_old_name");
const edit_food_id = document.getElementById("edit_food_id");


const btn_del_foods = document.querySelectorAll(".btn-del-food");
const btn_confirm_del_food = document.getElementById("btn-confirm-del-food");

input_img_cat?.addEventListener("change", function () {

    document.getElementById("img_cat").src = URL.createObjectURL(input_img_cat.files[0])

})

input_img_food?.addEventListener("change", function () {

    document.getElementById("img_food").src = URL.createObjectURL(input_img_food.files[0])


})


admin_menu_options.forEach(option => {
    option.addEventListener("click", function () {
        option.querySelector("form")?.submit();
    })
})

btn_del_users.forEach(btn_del => {
    btn_del.addEventListener("click", function () {

        btn_confirm_del_user.onclick = function () {

            const form_del_user = new XMLHttpRequest();
            form_del_user.open("POST", "partials/actions.php");
            form_del_user.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            form_del_user.send("id_user_del=" + btn_del.parentElement.querySelector("span").innerText);

            form_del_user.addEventListener("readystatechange", function () {

                    if (form_del_user.readyState === XMLHttpRequest.DONE && form_del_user.status === 200) {

                        if (form_del_user.responseText.includes("successfully")) {
                            toastr.success("Suppression réussie ! ");
                            //remove element in the html
                            btn_del.parentElement.parentElement.remove();

                            //   reload_page();

                        } else {
                            toastr.error("Une erreur s'set produite ! ")
                        }

                    }
                }
            )

        }
    })
})


btn_del_cmd.forEach(btn_del => {
    btn_del.addEventListener("click", function () {

        btn_confirm_del_cmd.onclick = function () {

            const form_del_cmd = new XMLHttpRequest();
            form_del_cmd.open("POST", "partials/actions.php");
            form_del_cmd.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            form_del_cmd.send("id_com_del=" + btn_del.parentElement.querySelector("span").innerText);

            form_del_cmd.addEventListener("readystatechange", function () {

                    if (form_del_cmd.readyState === XMLHttpRequest.DONE && form_del_cmd.status === 200) {

                        if (form_del_cmd.responseText.includes("successfully")) {
                            toastr.success("Suppression réussie ! ");
                            //remove element in the html
                            btn_del.parentElement.parentElement.remove();
                            //  reload_page();

                        } else {
                            toastr.error("Une erreur s'set produite ! ")
                        }

                    }
                }
            )

        }
    })
})

btn_statut_cmd.forEach(btn_statut => {
    btn_statut.addEventListener("click", function () {

        const form_update_cmd = new XMLHttpRequest();
        form_update_cmd.open("POST", "partials/actions.php");
        form_update_cmd.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        const input_statut = btn_statut.parentElement.querySelector("h6");
        let statut;

        if (input_statut.innerText.includes("non")) {
            statut = "livré";
        } else {
            statut = "non livré";

        }
        form_update_cmd.send("id_com_update=" + btn_statut.parentElement.querySelector("span").innerText + "&statut=" + statut);
        form_update_cmd.addEventListener("readystatechange", function () {

                if (form_update_cmd.readyState === XMLHttpRequest.DONE && form_update_cmd.status === 200) {

                    if (form_update_cmd.responseText.includes("successfully")) {
                        toastr.success("Mise à jour réussie ! ");

                        if (statut.includes("non")) {

                            input_statut.classList.replace("text-success", "text-danger");
                            input_statut.innerHTML = statut;
                            btn_statut.classList.replace("btn-danger", "btn-success");
                            btn_statut.querySelector("i").classList.replace("bi-x-lg", "bi-check2-circle");
                        } else {
                            input_statut.classList.replace("text-danger", "text-success");
                            input_statut.innerHTML = statut;
                            btn_statut.classList.replace("btn-success", "btn-danger");
                            btn_statut.querySelector("i").classList.replace("bi-check2-circle", "bi-x-lg");
                        }


                    } else {
                        toastr.error("Une erreur s'set produite ! ")
                    }

                }
            }
        )
    })
})

btn_reload?.addEventListener("click", reload_page_immediately);


btn_del_admins.forEach(btn_del => {
    btn_del.addEventListener("click", function () {

        btn_confirm_del_admin.onclick = function () {

            const form_del_admin = new XMLHttpRequest();
            form_del_admin.open("POST", "partials/actions.php");
            form_del_admin.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            form_del_admin.send("id_admin_del=" + btn_del.parentElement.querySelector("span").innerText);

            form_del_admin.addEventListener("readystatechange", function () {

                    if (form_del_admin.readyState === XMLHttpRequest.DONE && form_del_admin.status === 200) {

                        if (form_del_admin.responseText.includes("successfully")) {
                            toastr.success("Suppression réussie ! ");
                            //remove element in the html
                            btn_del.parentElement.parentElement.remove();

                            //   reload_page();

                        } else {
                            toastr.error("Une erreur s'set produite ! ")
                        }

                    }
                }
            )

        }
    })
})


btn_edit_cats.forEach(btn_edit_cat => {
    btn_edit_cat.addEventListener("click", function () {
        input_edit_img_cat.src = btn_edit_cat.parentElement.querySelector("img").src;
        edit_titre_cat.value = btn_edit_cat.parentElement?.querySelector("h5").innerText;
        edit_image_cat_old_name.value = btn_edit_cat.parentElement?.querySelector("em").innerText;
        edit_cat_id.value = btn_edit_cat.parentElement?.querySelector("span").innerText;
    });
})

input_edit_nom_img_cat?.addEventListener("change", function () {
    const edit_img_cat = document.getElementById("edit_img_cat");
    edit_img_cat.src = URL.createObjectURL(input_edit_nom_img_cat.files[0]);

})


btn_del_cats.forEach(btn_del => {
    btn_del.addEventListener("click", function () {

        btn_confirm_del_cat.onclick = function () {

            const form_del_cat = new XMLHttpRequest();
            form_del_cat.open("POST", "partials/actions.php");
            form_del_cat.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            form_del_cat.send("id_cat_del=" + btn_del.parentElement.querySelector("span").innerText);

            form_del_cat.addEventListener("readystatechange", function () {

                    if (form_del_cat.readyState === XMLHttpRequest.DONE && form_del_cat.status === 200) {

                        if (form_del_cat.responseText.includes("successfully")) {
                            toastr.success("Suppression réussie ! ");
                            //remove element in the html
                            btn_del.parentElement.parentElement.remove();

                            //   reload_page();

                        } else {
                            toastr.error("Une erreur s'set produite ! ")
                        }

                    }
                }
            )

        }
    })
})


btn_del_foods.forEach(btn_del => {
    btn_del.addEventListener("click", function () {

        btn_confirm_del_food.onclick = function () {

            const form_del_food = new XMLHttpRequest();
            form_del_food.open("POST", "partials/actions.php");
            form_del_food.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            form_del_food.send("id_food_del=" + btn_del.parentElement.querySelector("span").innerText);

            form_del_food.addEventListener("readystatechange", function () {

                    if (form_del_food.readyState === XMLHttpRequest.DONE && form_del_food.status === 200) {

                        if (form_del_food.responseText.includes("successfully")) {
                            toastr.success("Suppression réussie ! ");
                            //remove element in the html
                            btn_del.parentElement.parentElement.remove();

                            //   reload_page();

                        } else {
                            toastr.error("Une erreur s'set produite ! ")
                        }

                    }
                }
            )

        }
    })
})

btn_edit_cats.forEach(btn_edit_cat => {
    btn_edit_cat.addEventListener("click", function () {
        input_edit_img_cat.src = btn_edit_cat.parentElement.querySelector("img").src;
        edit_titre_cat.value = btn_edit_cat.parentElement?.querySelector("h5").innerText;
        edit_image_cat_old_name.value = btn_edit_cat.parentElement?.querySelector("em").innerText;
        edit_cat_id.value = btn_edit_cat.parentElement?.querySelector("span").innerText;
    });
})

input_edit_nom_img_cat?.addEventListener("change", function () {
    const edit_img_cat = document.getElementById("edit_img_cat");
    edit_img_cat.src = URL.createObjectURL(input_edit_nom_img_cat.files[0]);

})

btn_edit_foods.forEach(btn_edit_food => {
    btn_edit_food.addEventListener("click", function () {
        input_edit_img_food.src = btn_edit_food.parentElement.parentElement.querySelector("img").src;
        edit_titre_food.value = btn_edit_food.parentElement?.querySelector("h5").innerText;
        edit_prix.value = parseInt(btn_edit_food.parentElement?.querySelector("h6").innerText.replaceAll(" ", ""));
        edit_description.value = btn_edit_food.parentElement?.querySelector("p").innerText;
        edit_image_food_old_name.value = btn_edit_food.parentElement?.querySelector("em").innerText;
        edit_id_cat_food.value = btn_edit_food.parentElement?.querySelector("cite").innerText;
        edit_food_id.value = btn_edit_food.parentElement?.querySelector("span").innerText;
    });
})


/**
 * On the page load
 */

calcPrice();
calcMarge();
window.addEventListener("resize", calcMarge);


$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        smartSpeed: 1500,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })

});