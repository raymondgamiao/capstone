"use strict";
const addelem = document.getElementById("add-appointment");
const addbutton = addelem.querySelector('[name="save"]');
addbutton.addEventListener("click", addappointment);
var bookingcalendar;
function addappointment() {
    var services = Array.from(addelem.querySelector('[name="service"]').options)
        .filter((option) => option.selected)
        .map((option) => option.value);
    var adddata = {
        title: addelem.querySelector("#addtitle").value,
        start:
            addelem.querySelector('[name="start_date"]').value +
            "T05:30:00.000Z",
        end:
            addelem.querySelector('[name="end_date"]').value + "T05:30:00.000Z",
        starttime: addelem.querySelector('[name="start_time"]').value,
        endtime: addelem.querySelector('[name="end_time"]').value,
        desc: addelem.querySelector('[name="description"]').value,
        checked: addelem.querySelector("#addconfirm2").checked,
        service: services,
        backgroundColor: "rgba(58,87,232,0.2)",
        textColor: "rgba(58,87,232,1)",
        borderColor: "rgba(58,87,232,1)",
    };
    bookingcalendar.addEvent(adddata);
    addelem.querySelector("#add-form").reset();
    addelem.querySelector("#addconfirm2").checked = false;
}
