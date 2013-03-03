    <script>
        $(document).ready(function(){

//            $('#semester').on("change",function(){
            $str=$('#semester option:selected').val();
                if ($str != '') {

                                    $("#loader").html('<img src="<?php echo base_url('assets/images/ajax-loader.gif');?>">');
                                    $.ajax({
                                        type:"POST",
                                        dataType:"json",
                                        url:"<?php echo base_url('upload/find_subject_name');?>",
                                        data:"q=" + $str,
                                        success:function (msg) {
                                            var optionsStr;
                        //                    alert(msg); return false;
                                            for (i = 0; i < msg.subjects.length; i++) {
                                                    optionsStr += "<option value='" + msg.svalues[i] + "'>" + msg.subjects[i] + "</option>";
                                            }
                                            $("#subject").html(optionsStr);
                                            $("#loader").html('');
                                        }

                                    });
//                                    return false;

                                }
//                else {
//                                    alert('Please select semester');
//                                    return false;
//                                }
//            });

        });
    </script>
    <script>
        $(document).ready(function(){
        $('#semester').on("change",function(){
            $str=$('#semester option:selected').val();
            if ($str != '') {

                $("#loader").html('<img src="<?php echo base_url('assets/images/ajax-loader.gif');?>">');
                $.ajax({
                    type:"POST",
                    dataType:"json",
                    url:"<?php echo base_url('upload/find_subject_name');?>",
                    data:"q=" + $str,
                    success:function (msg) {
                        var optionsStr;
                        //                    alert(msg); return false;
                        for (i = 0; i < msg.subjects.length; i++) {
                            optionsStr += "<option value='" + msg.svalues[i] + "'>" + msg.subjects[i] + "</option>";
                        }
                        $("#subject").html(optionsStr);
                        $("#loader").html('');
                    }

                });
//                                    return false;

            }
                else {
                                    alert('Please select semester');
                                    return false;
                                }
            });

        });
    </script>
<div class="container">
    <?php echo $error;?>
    <?php $attributes = array('id' => 'myForm');?>
    <?php echo form_open_multipart('ggsipu/find_paper', $attributes);?>
    <label><b>Select Semester</b></label>
    <select id="semester" name="semester" class="txt-select-box">
        <option value="">Select Semester</option>
        <option value="1">
            Semester 1
        </option>
        <option value="2">
            Semester 2
        </option>
        <option value="3">
            Semester 3
        </option>
        <option value="4">
            Semester 4
        </option>
        <option value="5">
            Semester 5
        </option>
        <option value="6">
            Semester 6
        </option>
        <option value="7">
            Semester 7
        </option>
        <option value="8">
            Semester 8
        </option>

    </select>
    <br>
    <label><b>Subject Name</b></label>
    <select name="subject" class="txt-select-box" id="subject">
        <option value="">Select subject name</option>
    </select>
    <br>
    <label><b>Select Year</b></label>
    <select name="year">
        <option value="">SELECT YEAR</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
    </select>
    <br>
    <label><b>Select term</b></label>
    <select name="term">
        <option value="">SELECT TERM</option>
        <option value="FINAL">FINAL</option>
        <option value="3">3rd Term</option>
        <option value="2">2nd Term</option>
        <option value="1">1st Term</option>
    </select>


    <div id="submit-btn"><input class="btn btn-danger" type="submit" id="submit" name="submit" value="upload">&nbsp;&nbsp;<span
            id="loader"></span></div>
</div>








