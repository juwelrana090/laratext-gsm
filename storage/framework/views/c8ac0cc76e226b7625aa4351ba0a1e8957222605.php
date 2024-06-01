<?php
    $security_env=json_decode($car->security_env);
    $fourWd = search_in_array('4WD',$security_env);
    $adapTiveCruise = search_in_array('Adaptive cruise control',$security_env);
    $airbags_front_side = search_in_array('Airbags front and side',$security_env);
    $Differential_lock = search_in_array('Differential lock',$security_env);
    $Lane_departure_alert = search_in_array('Lane departure alert',$security_env);
    $Parking_assist = search_in_array('Parking assist',$security_env);
    $Rear_wheel_drive = search_in_array('Rear wheel drive',$security_env);
    $Traction_control = search_in_array('Traction control',$security_env);
    $Xenon_headlights = search_in_array('Xenon headlights',$security_env);
    $ABS = search_in_array('ABS',$security_env);
    $Adaptive_lighting = search_in_array('Adaptive lighting',$security_env);
    $All_wheel_drive = search_in_array('All wheel drive',$security_env);
    $Front_wheel_drive = search_in_array('Front wheel drive',$security_env);
    $LED_headlight = search_in_array('LED headlight',$security_env);
    $tyre_pressure = search_in_array('Tyre pressure warning system',$security_env);
?>
<div class="row">
    <div class="col-lg-6">
        <div class="form-check">
            <input class="form-check-input" <?php echo e($fourWd ? 'checked' : ''); ?> name="security_env[]" type="checkbox" value="4WD"
                id="4wd">
            <label class="form-check-label" for="4wd">
                4WD
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e($adapTiveCruise ? 'checked' : ''); ?> type="checkbox" name="security_env[]"
                value="Adaptive cruise control" id="adaptive_cruise_control">
            <label class="form-check-label" for="adaptive_cruise_control">
                Adaptive cruise control
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($airbags_front_side ? 'checked' : ''); ?> type="checkbox" name="security_env[]"
                value="Airbags front and side" id="airbags_front_and_side">
            <label class="form-check-label" for="airbags_front_and_side">
                Airbags front and side
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($Differential_lock ? 'checked' : ''); ?> type="checkbox" name="security_env[]"
                value="Differential lock" id="differential_lock">
            <label class="form-check-label" for="differential_lock">
                Differential lock
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($Lane_departure_alert ? 'checked' : ''); ?> type="checkbox" name="security_env[]"
                value="Lane departure alert" id="lane_departure_alert">
            <label class="form-check-label" for="lane_departure_alert">
                Lane departure alert
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($Parking_assist ? 'checked' : ''); ?> name="security_env[]" type="checkbox"
                value="Parking assist" id="parking_assist">
            <label class="form-check-label" for="parking_assist">
                Parking assist
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($Rear_wheel_drive ? 'checked' : ''); ?> name="security_env[]" type="checkbox"
                value="Rear wheel drive" id="Rear_wheel_drive">
            <label class="form-check-label" for="Rear_wheel_drive">
                Rear wheel drive
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($Traction_control ? 'checked' : ''); ?> name="security_env[]" type="checkbox"
                value="Traction control" id="traction_control">
            <label class="form-check-label" for="traction_control">
                Traction control
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($Xenon_headlights ? 'checked' : ''); ?> name="security_env[]" type="checkbox"
                value="Xenon headlights" id="xenon_headlights">
            <label class="form-check-label" for="xenon_headlights">
                Xenon headlights
            </label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($ABS ? 'checked' : ''); ?> name="security_env[]" type="checkbox" value="ABS"
                id="abs">
            <label class="form-check-label" for="abs">
                ABS
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($Adaptive_lighting ? 'checked' : ''); ?> name="security_env[]" type="checkbox"
                value="Adaptive lighting" id="Adaptive_lighting">
            <label class="form-check-label" for="Adaptive_lighting">
                Adaptive lighting
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($All_wheel_drive ? 'checked' : ''); ?> name="security_env[]" type="checkbox"
                value="All wheel drive" id="All_wheel_drive">
            <label class="form-check-label" for="All_wheel_drive">
                All wheel drive
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($Front_wheel_drive ? 'checked' : ''); ?> name="security_env[]" type="checkbox"
                value="Front wheel drive" id="front_wheel_drive">
            <label class="form-check-label" for="front_wheel_drive">
                Front wheel drive
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($LED_headlight ? 'checked' : ''); ?> name="security_env[]" type="checkbox"
                value="LED headlight" id="led_headlight">
            <label class="form-check-label" for="led_headlight">
                LED headlight
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e($tyre_pressure ? 'checked' : ''); ?> name="security_env[]" type="checkbox"
                value="Tyre pressure warning system" id="Tyre_pressure_warning_system">
            <label class="form-check-label" for="Tyre_pressure_warning_system">
                Tyre pressure warning system
            </label>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\app_gsp\resources\views\backend\car\edit_parts\security_and_env.blade.php ENDPATH**/ ?>