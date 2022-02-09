import DropZone from './DropZone.js';
import kanbanAPI from "../api/kanbanAPI.js";
export default class Item {
    constructor(id, content) {
        // drop zone create
        //const bottomDropZone = DropZone.createDropZone();
        this.elements = {};

        this.elements.root = Item.createRoot();
        this.elements.input = this.elements.root.querySelector(".kanban__item-input");


        this.elements.root.dataset.id = id;
        this.elements.input.textContent = content;
        this.content = content;
        // this.elements.root.appendChild(bottomDropZone);


        // Apres creation begue input
        // const onBlur = () => {
        //     const newContent = this.elements.input.textContent.trim();

        //     if (newContent == this.content) {
        //         return;

        //     }
        //     this.content = newContent;
        //     kanbanAPI.updateItem(id, {
        //         content: this.content
        //     });

        //     //console.log(this.content);
        //     //console.log(newContent);

        // };
        // Apres creation begue input
        // this.elements.input.addEventListener("blur", onBlur);
        // this.elements.root.addEventListener("dblclick", () => {
        //     const check = confirm("Êtes-vous sûr de vouloir supprimer")

        //     if (check) {
        //         kanbanAPI.deleteItem(id);
        //         this.elements.input.removeEventListener("blur", onblur);
        //         this.elements.root.parentElement.removeChild(this.elements.root);
        //     }
        // });

        //  this.elements.root.addEventListener("dragstart", e => {
        //      e.dataTransfer.setData("text/plain", id);
        //  });
        //  this.elements.input.addEventListener("drop", e => {
        //      e.preventDefault();
        //  });


    }

    static createRoot() {

        const range = document.createRange();

        range.selectNode(document.body);
        return range.createContextualFragment(`
                <div class="kanban__item" draggable="true">
                    <div class="kanban__item-input" contenteditable>
                    </div>
                 </div>
           
        `).children[0];

    }

}