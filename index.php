<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Challenge</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
         integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    </head>
    <body>



        <script type="text/javascript">
            $(document).ready(function($)
            {
            	//ajax row data
            	var ajax_data =
            	[
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
                    {pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
                    {pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
                    {pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            		{pname:"postalCode:", day1:"-", day2:"-", day3:"-", day4:"-", day5:"-" , day6:"x", day7:"-"},
            	]



            	var random_id = function  ()
            	{
            		var id_num = Math.random().toString(9).substr(2,3);
            		var id_str = Math.random().toString(36).substr(2);

            		return id_num + id_str;
            	}


            	//--->create data table > start
            	var tbl = '';
            	tbl +='<table class="table table-hover">'

            		//--->create table header > start
            		tbl +='<thead>';
            			tbl +='<tr>';
            			tbl +='<th>A<br> Postal Code</th>';
            			tbl +='<th>G<br> Sunday</th>';
            			tbl +='<th>H<br> Monday</th>';
            			tbl +='<th>I<br> Tuesday</th>';
                        tbl +='<th>J<br> Wednsday</th>';
                        tbl +='<th>K<br> Thursday</th>';
                        tbl +='<th>L<br> Friday</th>';
                        tbl +='<th>M<br> Saturday</th>';
            			tbl +='</tr>';
            		tbl +='</thead>';
            		//--->create table header > end


            		//--->create table body > start
            		tbl +='<tbody>';

            			//--->create table body rows > start
            			$.each(ajax_data, function(index, val)
            			{
            				//you can replace with your database row id
            				var row_id = random_id();

            				//loop through ajax row data
            				tbl +='<tr row_id="'+row_id+'">';
            					tbl +='<td ><div class="row_data" edit_type="click" col_name="pname">'+val['pname']+'</div></td>';
            					tbl +='<td ><div class="row_data" edit_type="click" col_name="day1">'+val['day1']+'</div></td>';
            					tbl +='<td ><div class="row_data" edit_type="click" col_name="day2">'+val['day2']+'</div></td>';
                                tbl +='<td ><div class="row_data" edit_type="click" col_name="day3">'+val['day3']+'</div></td>';
                                tbl +='<td ><div class="row_data" edit_type="click" col_name="day4">'+val['day4']+'</div></td>';
                                tbl +='<td ><div class="row_data" edit_type="click" col_name="day5">'+val['day5']+'</div></td>';
                                tbl +='<td ><div class="row_data" edit_type="click" col_name="day6">'+val['day6']+'</div></td>';
                                tbl +='<td ><div class="row_data" edit_type="click" col_name="day7">'+val['day7']+'</div></td>';






            					//--->edit options > start
            					tbl +='<td>';

            						tbl +='<span class="btn_edit" > <a href="#" class="btn btn-link " row_id="'+row_id+'" > Edi</a> </span>';

            						//only show this button if edit button is clicked
            						tbl +='<span class="btn_save"> <a href="#" class="btn btn-link"  row_id="'+row_id+'"> Save</a> | </span>';
            						tbl +='<span class="btn_cancel"> <a href="#" class="btn btn-link" row_id="'+row_id+'"> Cancel</a> | </span>';

            					tbl +='</td>';
            					//--->edit options > end

            				tbl +='</tr>';
            			});

            			//--->create table body rows > end

            		tbl +='</tbody>';
            		//--->create table body > end

            	tbl +='</table>'
            	//--->create data table > end

            	//out put table data
            	$(document).find('.tbl_user_data').html(tbl);

            	$(document).find('.btn_save').hide();
            	$(document).find('.btn_cancel').hide();


            	//--->make div editable > start
            	$(document).on('click', '.row_data', function(event)
            	{
            		event.preventDefault();

            		if($(this).attr('edit_type') == 'button')
            		{
            			return false;
            		}

            		//make div editable
            		$(this).closest('div').attr('contenteditable', 'true');
            		//add bg css
            		$(this).addClass('bg-warning').css('padding','5px');

            		$(this).focus();
            	})
            	//--->make div editable > end


            	//--->save single field data > start
            	$(document).on('focusout', '.row_data', function(event)
            	{
            		event.preventDefault();

            		if($(this).attr('edit_type') == 'button')
            		{
            			return false;
            		}

            		var row_id = $(this).closest('tr').attr('row_id');

            		var row_div = $(this)
            		.removeClass('bg-warning') //add bg css
            		.css('padding','')

            		var col_name = row_div.attr('col_name');
            		var col_val = row_div.html();

            		var arr = {};
            		arr[col_name] = col_val;

            		//use the "arr"	object for your ajax call
            		$.extend(arr, {row_id:row_id});

            		//out put to show
            		$('.post_msg').html( '<pre class="bg-success">'+JSON.stringify(arr, null, 2) +'</pre>');

            	})
            	//--->save single field data > end


            	//--->button > edit > start
            	$(document).on('click', '.btn_edit', function(event)
            	{
            		event.preventDefault();
            		var tbl_row = $(this).closest('tr');

            		var row_id = tbl_row.attr('row_id');

            		tbl_row.find('.btn_save').show();
            		tbl_row.find('.btn_cancel').show();

            		//hide edit button
            		tbl_row.find('.btn_edit').hide();

            		//make the whole row editable
            		tbl_row.find('.row_data')
            		.attr('contenteditable', 'true')
            		.attr('edit_type', 'button')
            		.addClass('bg-warning')
            		.css('padding','3px')

            		//--->add the original entry > start
            		tbl_row.find('.row_data').each(function(index, val)
            		{
            			//this will help in case user decided to click on cancel button
            			$(this).attr('original_entry', $(this).html());
            		});
            		//--->add the original entry > end

            	});
            	//--->button > edit > end


            	//--->button > cancel > start
            	$(document).on('click', '.btn_cancel', function(event)
            	{
            		event.preventDefault();

            		var tbl_row = $(this).closest('tr');

            		var row_id = tbl_row.attr('row_id');

            		//hide save and cacel buttons
            		tbl_row.find('.btn_save').hide();
            		tbl_row.find('.btn_cancel').hide();

            		//show edit button
            		tbl_row.find('.btn_edit').show();

            		//make the whole row editable
            		tbl_row.find('.row_data')
            		.attr('edit_type', 'click')
            		.removeClass('bg-warning')
            		.css('padding','')

            		tbl_row.find('.row_data').each(function(index, val)
            		{
            			$(this).html( $(this).attr('original_entry') );
            		});
            	});
            	//--->button > cancel > end


            	//--->save whole row entery > start
            	$(document).on('click', '.btn_save', function(event)
            	{
            		event.preventDefault();
            		var tbl_row = $(this).closest('tr');

            		var row_id = tbl_row.attr('row_id');


            		//hide save and cacel buttons
            		tbl_row.find('.btn_save').hide();
            		tbl_row.find('.btn_cancel').hide();

            		//show edit button
            		tbl_row.find('.btn_edit').show();


            		//make the whole row editable
            		tbl_row.find('.row_data')
            		.attr('edit_type', 'click')
            		.removeClass('bg-warning')
            		.css('padding','')

            		//--->get row data > start
            		var arr = {};
            		tbl_row.find('.row_data').each(function(index, val)
            		{
            			var col_name = $(this).attr('col_name');
            			var col_val  =  $(this).html();
            			arr[col_name] = col_val;
            		});
            		//--->get row data > end

            		//use the "arr"	object for your ajax call
            		$.extend(arr, {row_id:row_id});

            		//out put to show
            		$('.post_msg').html( '<pre class="bg-success">'+JSON.stringify(arr, null, 2) +'</pre>')


            	});
            	//--->save whole row entery > end


            });
        </script>

        <div class="panel panel-default">
            <div class="panel-heading"><b> Challenge</b> </div>

            <div class="panel-body">

            <div class="tbl_user_data"></div>

            </div>

        </div>
        <!-- Calendar -->
            <div class="container col-sm-4 col-md-7 col-lg-4 mt-5">
                <div class="card">
                    <h3 class="card-header" id="monthAndYear"></h3>
                    <table class="table table-bordered table-responsive-sm" id="calendar">
                        <thead>
                        <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                        </thead>

                        <tbody id="calendar-body">

                        </tbody>
                    </table>

                    <div class="form-inline">

                        <button class="btn btn-outline-primary col-sm-6" id="previous" onclick="previous()">Previous</button>

                        <button class="btn btn-outline-primary col-sm-6" id="next" onclick="next()">Next</button>
                    </div>
                    <br/>
                    <form class="form-inline">
                        <label class="lead mr-2 ml-2" for="month">Jump To: </label>
                        <select class="form-control col-sm-4" name="month" id="month" onchange="jump()">
                            <option value=0>Jan</option>
                            <option value=1>Feb</option>
                            <option value=2>Mar</option>
                            <option value=3>Apr</option>
                            <option value=4>May</option>
                            <option value=5>Jun</option>
                            <option value=6>Jul</option>
                            <option value=7>Aug</option>
                            <option value=8>Sep</option>
                            <option value=9>Oct</option>
                            <option value=10>Nov</option>
                            <option value=11>Dec</option>
                        </select>


                        <label for="year"></label><select class="form-control col-sm-4" name="year" id="year" onchange="jump()">
                        <option value=1990>1990</option>
                        <option value=1991>1991</option>
                        <option value=1992>1992</option>
                        <option value=1993>1993</option>
                        <option value=1994>1994</option>
                        <option value=1995>1995</option>
                        <option value=1996>1996</option>
                        <option value=1997>1997</option>
                        <option value=1998>1998</option>
                        <option value=1999>1999</option>
                        <option value=2000>2000</option>
                        <option value=2001>2001</option>
                        <option value=2002>2002</option>
                        <option value=2003>2003</option>
                        <option value=2004>2004</option>
                        <option value=2005>2005</option>
                        <option value=2006>2006</option>
                        <option value=2007>2007</option>
                        <option value=2008>2008</option>
                        <option value=2009>2009</option>
                        <option value=2010>2010</option>
                        <option value=2011>2011</option>
                        <option value=2012>2012</option>
                        <option value=2013>2013</option>
                        <option value=2014>2014</option>
                        <option value=2015>2015</option>
                        <option value=2016>2016</option>
                        <option value=2017>2017</option>
                        <option value=2018>2018</option>
                        <option value=2019>2019</option>
                        <option value=2020>2020</option>
                        <option value=2021>2021</option>
                        <option value=2022>2022</option>
                        <option value=2023>2023</option>
                        <option value=2024>2024</option>
                        <option value=2025>2025</option>
                        <option value=2026>2026</option>
                        <option value=2027>2027</option>
                        <option value=2028>2028</option>
                        <option value=2029>2029</option>
                        <option value=2030>2030</option>
                    </select></form>
                </div>
            </div>
            <!--<button name="jump" onclick="jump()">Go</button>-->


            <!-- Optional JavaScript for bootstrap -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                    crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
                    crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
                    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
                    crossorigin="anonymous"></script>
            <script type="text/javascript" src="script.js"></script>



    </body>
</html>
