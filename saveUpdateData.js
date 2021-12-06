$(document).ready(() => {
  $("#save-data").click(() => {
    console.log("clic save");

    let id = $("#id").val();
    let lastname = $("#lastname").val();
    let firstname = $("#firstname").val();
    let address = $("#address").val();
    let city = $("#city").val();
    console.log(firstname);

    $.ajax({
      url: "update.php",
      type: "POST",
      data: {
        id,
        lastname,
        firstname,
        address,
        city,
      },
    });
  });
});
