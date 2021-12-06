$(document).ready(() => {
  $("#add").click(() => {
    let id = $("#name").val();
    let lastname = $("#lastname").val();
    let firstname = $("#firstname").val();
    let address = $("#address").val();
    let city = $("#city").val();

    console.log("id", id);

    $.ajax({
      url: "addElement.php",
      type: "POST",
      data: {
        id,
        lastname,
        firstname,
        address,
        city,
      },
      success: (data) => {
        alert(data);
      },
    });
  });
});
