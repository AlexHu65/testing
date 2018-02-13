/**
 * Created by alejandro.chavez on 6/28/2017.
 */


var enterprise = {
    employers: [
        {
            id: '',
            name: '',
            address: '',
            station: ''
        },
        {
            id: '',
            name: '',
            address: '',
            station: ''
        }
    ],
    vacants: [
        {
            id: '203',
            name: '',
            description: ''
        },
        {
            id: '204',
            name: '',
            description: ''
        }

    ],

    socialReason: 'Games development S.A. de C.V',
    rfc: '502148DDJSMN',
    phone: '15236559'

};

enterprise.addVacants = function (id, name, description) {

    for (var i = 0; i < enterprise.vacants.length; i++) {
        this.vacants[i].id = id;
        this.vacants[i].name = name;
        this.vacants[i].description = description;
    }
};


function submitForm(id) {


}
