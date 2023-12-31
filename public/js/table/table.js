$(document).ready(function(){
  $('.dataTables-example').DataTable({
      dom: '<"html5buttons"B>lTfgitp',
      buttons: [
          {extend: 'copy'},
          {extend: 'csv'},
          {extend: 'excel', title: 'ExampleFile'},
          {extend: 'pdf', title: 'ExampleFile'},

          {extend: 'print',
           customize: function (win){
                  $(win.document.body).addClass('white-bg');
                  $(win.document.body).css('font-size', '10px');

                  $(win.document.body).find('table')
                          .addClass('compact')
                          .css('font-size', 'inherit');
          }
          }
      ]

  });

  /* Init DataTables */
  var oTable = $('#editable').DataTable();

  /* Apply the jEditable handlers to the table */
  oTable.$('td').editable( '../example_ajax.php', {
      "callback": function( sValue, y ) {
          var aPos = oTable.fnGetPosition( this );
          oTable.fnUpdate( sValue, aPos[0], aPos[1] );
      },
      "submitdata": function ( value, settings ) {
          return {
              "row_id": this.parentNode.getAttribute('id'),
              "column": oTable.fnGetPosition( this )[2]
          };
      },

      "width": "90%",
      "height": "100%"
  } );


});

function fnClickAddRow() {
  $('#editable').dataTable().fnAddData( [
      "Custom row",
      "New row",
      "New row",
      "New row",
      "New row" ] );

}