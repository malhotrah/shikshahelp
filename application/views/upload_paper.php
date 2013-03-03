<html>
<head>
    <title>Upload Form</title>
    <script>
        //        function addMoreFiles() {
        //            $("#upload_more").show();
        //            $("#upload_more").append('<input type="file" name="files[]" />')
        //        }

        var files = 1;
        function addfile() {
            files++;
            var fl = $('#fileslist').get()[0];
            var row0 = fl.insertRow(fl.rows.length - 1);
            var cell0 = row0.insertCell(row0.cells.length);
            row0.style.height = '5px';
            var row1 = fl.insertRow(fl.rows.length - 1);
            var row2 = fl.insertRow(fl.rows.length - 1);
            var cell1 = row1.insertCell(row1.cells.length);
            cell1.innerHTML = "<b>File:<\/b>";
            var cell2 = row1.insertCell(row1.cells.length);
            cell2.innerHTML = "<input type='file' size=30 name='file" + files + "'>";

            $('#files').val(files);
            if (files >= 4) {
                $('#addfile').hide();
            }
        }

        $(document).on('click',"#addfile", function () {
            addfile();
            return false;
        })

        function showSubjects(str)
        {
            if(str!='')
            {

                $("#loader").html('<img src="<?php echo base_url('assets/images/ajax-loader.gif');?>">');
                $.ajax({
                    type: "POST",
                    dataType:"json",
                    url: "<?php echo base_url('upload/find_subject_name');?>",
                    data: "q="+str,
                    success : function(msg)
                    {var optionsStr;
//                    alert(msg); return false;
                        for(i=0;i<msg.subjects.length;i++){
                            optionsStr+="<option value='"+msg.svalues[i]+"'>"+msg.subjects[i]+"</option>";
                        }
                        $("#subject").html(optionsStr);
                        $("#loader").html('');
                    }

                });
                return false;

            }else{
                alert('Please select semester');
                return false;
            }

        }
    </script>
</head>

<div class="row-fluid" style="margin-top: 50px;">
    <?php echo $error;?>
    <?php $attributes = array('id' => 'myForm');?>
    <?php echo form_open_multipart('upload/do_upload', $attributes);?>
    <!--    <label>Part 1</label>-->
    <!--    <input type="file" name="file[]" size="20"/>-->
    <!--    <br/>-->
    <!--    <div style="display: none;" id="upload_more"></div>-->
    <!--    <a href="#" onclick="addMoreFiles()">Add More</a><br>-->
    <label><b>Select Semester</b></label>
    <select id="semester" name="semester" class="txt-select-box" onchange="showSubjects(this.value);">
        <option value="">Select Semester</option>
        <option value="1">
            Semester 1	 </option>
        <option value="2">
            Semester 2	 </option>
        <option value="3">
            Semester 3	 </option>
        <option value="4">
            Semester 4	 </option>
        <option value="5">
            Semester 5	 </option>
        <option value="6">
            Semester 6	 </option>
        <option value="7">
            Semester 7	 </option>
        <option value="8">
            Semester 8	 </option>

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
    <div id="fileupload" style="">
        <input type="hidden" name="files" value="1" id="files">
        <span style="float:left" class="text">You can select up to 4 files</span>
        <br>
        <table style="width:500px" id="fileslist">
            <tbody>
            <tr>
                <td><b>File:</b></td>
                <td><input type="file" size="30" name="file1"></td>
            </tr>

            <tr>
                <td></td>
                <td style="text-align: right;padding-right:50px;"><a href="" id="addfile">+1</a></td>
            </tr>
            </tbody>
        </table>
        <div id="submit-btn"><input class="btn btn-danger" type="submit" id="submit" name="submit" value="upload">&nbsp;&nbsp;<span id="loader"></span></div>
    </div>
</div>







