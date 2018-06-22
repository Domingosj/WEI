$("#nivel").change(function () {
  var selected_option = $('#nivel').val();

  if (selected_option === '4') {
    $('#codDig').show();
  }
  if (selected_option != '4') {
    $("#codDig").hide();
  }



})

function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}



$(document).ready(function(){
    $("#first").change(function(){
        $("#second option").remove();

        var names1 = $("#first option:selected").data('second').names;

        var newoptions1 = "";


        for(var i = 0; i < names1.length; i++){


            newoptions1+="<option value=" + names1[i].names + ">"+ names1[i].name +"</option>";
        }



        $("#second").append(newoptions1);

    });
});

$( function() {
    $( "#dob" ).datepicker();
  });


// $("#dob").datepicker({
//   $( "#datepicker" ).datepicker();
//
//     onSelect: function() {
//         var dateObject = $(this).datepicker('getDate');
//         var today = new Date();
//         var age = today.getFullYear() - ui.selectedYear;
//
//         $('#age').val(age);
//
//
//
//     }
// });


// $('#dob').datepicker({
//     onSelect: function(value, ui) {
//         var today = new Date(),
//             age = today.getFullYear() - ui.selectedYear;
//         $('#age').val(age);
//     }
// });


new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      labels: ["M", "F", "M", "F"],

      datasets: [
        {
          label: "Manica",
          backgroundColor: "#1abc9c",
          data: [133,221,783,2478]
        },
        {
          label: "Sofala",
          backgroundColor: "#2ecc71",
          data: [408,547,675,734]
        },
        {
          label: "Zambezia",
          backgroundColor: "#3498db",
          data: [133,221,783,2478]
        },
        {
          label: "Gaza",
          backgroundColor: "#9b59b6",
          data: [408,547,675,734]
        },

      ]
    },
    options: {
      title: {
        display: true,
        text: 'Gender Norms'
      }
    }
});


new Chart(document.getElementById("bar-chart-grouped-1"), {
    type: 'bar',
    data: {
      labels: ["M", "F", "M", "F"],

      datasets: [
        {
          label: "Manica",
          backgroundColor: "#1abc9c",
          data: [133,221,783,2478]
        },
        {
          label: "Sofala",
          backgroundColor: "#2ecc71",
          data: [408,547,675,734]
        },
        {
          label: "Zambezia",
          backgroundColor: "#3498db",
          data: [133,221,783,2478]
        },
        {
          label: "Gaza",
          backgroundColor: "#9b59b6",
          data: [408,547,675,734]
        },

      ]
    },
    options: {
      title: {
        display: true,
        text: 'Gender Norms'
      }
    }
});
