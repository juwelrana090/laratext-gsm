<?php
    $exterior=json_decode($car->exterior_design);
?>
<div class="row">
    <div class="col-lg-6">
        <div class="form-check">
            <input class="form-check-input"  <?php echo e(search_in_array('360 Degree Camera',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="360 Degree Camera" id="360camera">
            <label class="form-check-label" for="360camera">
                360 Degree Camera
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Blind spot detection camera',$exterior) ? 'checked' : ''); ?>  name="exterior_design[]" type="checkbox"
                value="Blind spot detection camera" id="blind_spot_detection_camera">
            <label class="form-check-label" for="blind_spot_detection_camera">
                Blind spot detection camera
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Fog Lights',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Fog Lights" id="fog_lights">
            <label class="form-check-label" for="fog_lights">
                Fog Lights
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Keyless go',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Keyless go" id="keyless_go">
            <label class="form-check-label" for="keyless_go">
                keyless go
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Off road tyres',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Off road tyres" id="off_road_tyres">
            <label class="form-check-label" for="off_road_tyres">
                Off road tyres
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Premium paint',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Premium paint" id="premium_paint">
            <label class="form-check-label" for="premium_paint">
                Premium paint
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Roof rails',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Roof rails" id="roof_rails">
            <label class="form-check-label" for="roof_rails">
                Roof rails
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Sport package',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Sport package" id="sporit_package">
            <label class="form-check-label" for="sporit_package">
                Sport package
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Trailer coupling',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Trailer coupling" id="trailer_coupling">
            <label class="form-check-label" for="trailer_coupling">
                Trailer coupling
            </label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Air suspension front and rear',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Air suspension front and rear" id="air_suspension">
            <label class="form-check-label" for="air_suspension">
                Air suspension front and rear
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Body kit',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Body kit" id="body_kit">
            <label class="form-check-label" for="body_kit">
                Body kit
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Hydraulic door',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Hydraulic door" id="hydraulic_door">
            <label class="form-check-label" for="hydraulic_door">
                Hydraulic door
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Off road kit',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Off road kit" id="off_road_kit">
            <label class="form-check-label" for="off_road_kit">
                Off road kit
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Performance tyres',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Performance tyres" id="performance_tyres">
            <label class="form-check-label" for="performance_tyres">
                Performance tyres
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Roof rack',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Roof rack" id="roof_rack">
            <label class="form-check-label" for="roof_rack">
                Roof rack
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Spoiler',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Spoiler" id="spoiler">
            <label class="form-check-label" for="spoiler">
                Spoiler
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Sport suspension',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Sport suspension" id="sport_suspension">
            <label class="form-check-label" for="sport_suspension">
                Sport suspension
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" <?php echo e(search_in_array('Winch',$exterior) ? 'checked' : ''); ?> name="exterior_design[]" type="checkbox"
                value="Winch" id="winch">
            <label class="form-check-label" for="winch">
                Winch
            </label>
        </div>

    </div>
</div>
<?php /**PATH C:\laragon\www\app_gsp\resources\views\backend\car\edit_parts\exterior.blade.php ENDPATH**/ ?>