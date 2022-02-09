import kanban from "./view/kanban.js";
//import kanbanAPI from "./view/kanban.js";
// console.log(kanbanAPI.getItems(1));
//console.log(kanbanAPI.insertItem(2, "I am new"));
//kanbanAPI.deleteItem(7516);

new kanban(
    document.querySelector(".kanban")
);