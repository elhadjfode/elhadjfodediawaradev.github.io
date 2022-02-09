import Column from "./Column.js";

export default class kanban {
    constructor(root) {
        this.root = root;

        kanban.columns().forEach(column => {
            //TODO: create as instance column a class
            const columnView = new Column(column.id, column.title);

            this.root.appendChild(columnView.elements.root);

        });

    }
    static columns() {
        return [{
                id: 1,
                title: "Remarque Projet commencée"
            },
            {
                id: 2,
                title: "En cours"
            },
            {
                id: 3,
                title: "Complété"
            }
        ];
    }

}