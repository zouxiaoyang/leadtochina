<form action="/index.php?option=com_order" method="post" id="adoption_form">
  <input type="hidden" name="type" value="2" />
  <input type="hidden" name="sdate" id="sdate" value="" />
  <input type="hidden" name="adult_price" id="adult_price" value="" />
  <input type="hidden" name="other_children_price" id="other_children_price" value="" />
  <input type="hidden" name="adoption_tour_title" value="" />
</form>

<script>
  $(function(){
    $(".adoption_enquiry").click(function(){
        var sdate = $(this).parents("tr").find("td:eq(0)").html();
        var adult_price = $(this).parents("tr").find("td:eq(1)").html();
        var other_children_price = $(this).parents("tr").find("td:eq(3)").html();
        $("#adoption_form").find("#sdate").val(sdate);
        $("#adoption_form").find("#adult_price").val(adult_price);
        $("#adoption_form").find("#other_children_price").val(other_children_price);
        $("#adoption_form").find("input[name='adoption_tour_title']").val($("#adoption_tour_title").html());
        $("#adoption_form").submit();
    })
  })
</script>