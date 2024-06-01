<?php
    $interior=json_decode($car->interior_design);
?>
<div class="row">
    <div class="col-lg-6">
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Air Conditioning',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Air Conditioning" id="Air_Conditioning">
            <label class="form-check-label" for="Air_Conditioning">
                Air Conditioning
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Analog Clock',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Analog Clock" id="analog_clock">
            <label class="form-check-label" for="analog_clock">
                Analog Clock
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Aux Audio In',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Aux Audio In" id="aux">
            <label class="form-check-label" for="aux">
                AUX audio in
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('CD Player',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="CD Player" id="cd">
            <label class="form-check-label" for="cd">
                CD PLayer
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Cooled front Seats',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Cooled front Seats" id="front_seats">
            <label class="form-check-label" for="front_seats">
                Cooled front Seats
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Cruise Control',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Cruise Control" id="cruse_control">
            <label class="form-check-label" for="cruse_control">
                Cruise Control
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Fridge',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Fridge" id="fridge">
            <label class="form-check-label" for="fridge">
                Fridge
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Heads up display',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Heads up display" id="headsupdisplay">
            <label class="form-check-label" for="headsupdisplay">
                Heads up display
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Hill descent control',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Hill descent control" id="hill">
            <label class="form-check-label" for="hill">
                Hill descent control
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Massaging Seats',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Massaging Seats" id=" Massaging_Seats">
            <label class="form-check-label" for=" Massaging_Seats">
                Massaging Seats
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Mps3 Interface',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Mps3 Interface" id="mp3">
            <label class="form-check-label" for="mp3">
                Mps3 Interface
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Panoramic Roof',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Panoramic Roof" id="Panoramic_Roof">
            <label class="form-check-label" for="Panoramic_Roof">
                Panoramic Roof
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Parking sensor rear',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Parking sensor rear" id="p_sensor">
            <label class="form-check-label" for="p_sensor">
                Parking sensor rear
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Power Locks',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Power Locks" id="power_locks">
            <label class="form-check-label" for="power_locks">
                Power Locks
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Power seats with memory',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Power seats with memory" id="power_seats_with_memory">
            <label class="form-check-label" for="power_seats_with_memory">
                Power seats with memory
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Premium sound system',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Premium sound system" id="sound_system">
            <label class="form-check-label" for="sound_system">
                Premium sound system
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Rear camera',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Rear camera" id="Rear_camera">
            <label class="form-check-label" for="Rear_camera">
                Rear camera
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Ride height control',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Ride height control" id="Ride_height_control">
            <label class="form-check-label" for="Ride_height_control">
                Ride height control
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Sunroof',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]"
                value="Sunroof" id="sunroof">
            <label class="form-check-label" for="sunroof">
                Sunroof
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('USB',$interior) ? 'checked' : ''); ?> type="checkbox" name="interior_design[]" value="USB"
                id="usb">
            <label class="form-check-label" for="usb">
                USB
            </label>
        </div>

    </div>
    <div class="col-lg-6">
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Alerm',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Alerm" id="Alerm">
            <label class="form-check-label" for="Alerm">
                Alerm
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Apple Car play',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Apple Car play" id="Apple_Car_play">
            <label class="form-check-label" for="Apple_Car_play">
                Apple Car play
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Blouetooth system',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Blouetooth system" id="Blouetooth_system">
            <label class="form-check-label" for="Blouetooth_system">
                Blouetooth system
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Climate control',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Climate control" id="Climate">
            <label class="form-check-label" for="Climate">
                Climate control
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Cooled rear seats',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Cooled rear seats" id="Cooled_rear_seats">
            <label class="form-check-label" for="Cooled_rear_seats">
                Cooled rear seats
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('DVD PLayer',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="DVD PLayer" id="dvd">
            <label class="form-check-label" for="dvd">
                DVD PLayer
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Front Camera',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Front Camera" id="front_camera">
            <label class="form-check-label" for="front_camera">
                Front Camera
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Heated Seats',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Heated Seats" id="Heated_Seats">
            <label class="form-check-label" for="Heated_Seats">
                Heated Seats
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Leather Seats',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Leather Seats" id="leather_seats">
            <label class="form-check-label" for="leather_seats">
                Leather Seats
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Moon roof',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Moon roof" id="Moon_roof">
            <label class="form-check-label" for="Moon_roof">
                Moon roof
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Multiple off road option selector',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Multiple off road option selector" id="Multiple_road">
            <label class="form-check-label" for="Multiple_road">
                Multiple off road option selector
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Paddle shifters',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Paddle shifters" id="paddle_sifters">
            <label class="form-check-label" for="paddle_sifters">
                Paddle shifters
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Parking sensor front',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Parking sensor front" id="p_sensor_front">
            <label class="form-check-label" for="p_sensor_front">
                Parking sensor front
            </label>
        </div>


        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Phone set',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Phone set" id="phone_set">
            <label class="form-check-label" for="phone_set">
                Phone set
            </label>
        </div>


        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Power seats',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Power seats" id="Power_seats">
            <label class="form-check-label" for="Power_seats">
                Power seats
            </label>
        </div>


        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Power Windows',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Power Windows" id="Power_Windows">
            <label class="form-check-label" for="Power_Windows">
                Power Windows
            </label>
        </div>


        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Racing Seats',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Racing Seats" id="Racing_Seats">
            <label class="form-check-label" for="Racing_Seats">
                Racing Seats
            </label>
        </div>


        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Rear TV Screens',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Rear TV Screens" id="Rear_TV">
            <label class="form-check-label" for="Rear_TV">
                Rear TV Screens
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Self steering parking',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Self steering parking" id="Self_steering_parking">
            <label class="form-check-label" for="Self_steering_parking">
                Self steering parking
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('Turner/ Radio',$interior) ? 'checked' : ''); ?> name="interior_design[]" type="checkbox"
                value="Turner/ Radio" id="radio">
            <label class="form-check-label" for="radio">
                Turner/ Radio
            </label>
        </div>

    </div>
</div>
<?php /**PATH C:\laragon\www\app_gsp\resources\views\backend\car\edit_parts\interior_design.blade.php ENDPATH**/ ?>