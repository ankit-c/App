$(document).ready(function(){
// Q1
var i0=1;
$("#add_row0").click(function(){
 $('#addr0_'+i0).html("<td>"+ (i0+1) +"</td>" +
                    "<td><input name='pname"+i0+"' type='text' placeholder='Project' class='form-control input-md'  /></td>" +
                    "<td><input  name='sitecode"+i0+"' type='text' placeholder='Site Code'  class='form-control input-md'></td>" +
                    "<td><input  name='fromPlace"+i0+"' type='text' placeholder='Place'  class='form-control input-md'></td>" +
                    "<td><input  name='toPlace"+i0+"' type='text' placeholder='Place'  class='form-control input-md'></td>" +
                    "<td><input name='date"+i0+"' type='date' class='form-control input-md'  /></td>" +
                    "<td><input  name='transport"+i0+"' type='text' placeholder='Transport'  class='form-control input-md'></td>" +
                    "<td><input  name='trans_fare"+i0+"' type='number' placeholder='Total Fare'  class='form-control input-md'></td>" +
                    "<td><input  name='hotel"+i0+"' type='text' placeholder='Hotel'  class='form-control input-md'></td>" +
                    "<td><input name='hotel_amount"+i0+"' type='number' placeholder='Amount' class='form-control input-md'  /></td>" +
                    "<td><input  name='consume"+i0+"' type='text' placeholder='Consumables'  class='form-control input-md'></td>" +
                    "<td><input  name='remark"+i0+"' type='text' placeholder='Site Remark'  class='form-control input-md'></td>" +
                    "<td><input  name='expense"+i0+"' type='number' placeholder='Total expense'  class='form-control input-md'></td>" +
                    "<td><input  name='bal"+i0+"' type='text' placeholder='Balance'  class='form-control input-md' disabled></td>" +
                    "<td>    <a id='delete_row' class='btn btn-default'>Delete Row</a></td>");

 $('#tab_logic0').append('<tr id="addr0_'+(i0+1)+'"></tr>');
 i0++;
});

$("#delete_row").click(function(){
    $(this).closest("tr").html('');
$("#addr"+(i-1)).html('');
});


});
