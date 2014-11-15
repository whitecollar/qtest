<script src="/dhtmlx/scheduler/dhtmlxscheduler.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="/dhtmlx/scheduler/dhtmlxscheduler_glossy.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<div id="scheduler_here" class="dhx_cal_container" style='width:800px; height:600px;'>
		<div class="dhx_cal_navline">
			<div class="dhx_cal_prev_button">&nbsp;</div>
			<div class="dhx_cal_next_button">&nbsp;</div>
			<div class="dhx_cal_today_button"></div>
			<div class="dhx_cal_date"></div>
			<div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
			<div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>
			<div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
		</div>
		<div class="dhx_cal_header">
		</div>
		<div class="dhx_cal_data">
		</div>
	</div>


<script type="text/javascript" charset="utf-8">
		scheduler.config.multi_day = true;
		
		scheduler.config.xml_date="%Y-%m-%d %H:%i";
		scheduler.config.first_hour = 5;
		scheduler.init('scheduler_here',new Date(2010,7,5),"week");
		scheduler.load("./scheduler_data");

		var dp = new dataProcessor("./scheduler_data");
		
		dp.attachEvent("onAfterUpdate", function(sid, action, tid, response){
			if (action == "invalid"){
				alert(response.getAttribute("details"));
			}
		})
		dp.init(scheduler);
</script>