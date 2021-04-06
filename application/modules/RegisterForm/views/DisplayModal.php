<table>
    <tr >
        <td class="form-control">First name      :</td>
        <td><?= $Data->Fname;?></td>
    </tr>
    <tr >
        <td class="form-control">Last name       :</td>
        <td><?= $Data->Lname;?></td>
    </tr>
    <tr >
        <td class="form-control">DOB             :</td>
        <td><?= $Data->DOB;?></td>
    </tr>
    <tr >
        <td class="form-control">Mobile No.      :</td>
        <td><?= $Data->Mobile;?></td>
    </tr>
    <tr >
        <td class="form-control">Email           :</td>
        <td><?= $Data->Email;?></td>
    </tr>
    <tr >
        <td class="form-control">Address         :</td>
        <td><?= $Data->Address;?></td>
    </tr>
    <tr >
        <td class="form-control">Education       :</td>
        <td><?= $Data->Education;?></td>
    </tr>
    <tr >
        <td class="form-control">KeySkills       :</td>
        <td><?= $Data->KeySkills;?></td>
    </tr>
    <tr >
        <td class="form-control">Gender          :</td>
        <td><?= $Data->Gender;?></td>
    </tr>
</table>

<table id="user">
    <tr>
        <th>Course</th>
        <th>Instiute</th>
        <th>YearOfPassing</th>
        <th>Percentage</th>
    </tr>
    <?php 
        foreach ($EduData as $res)
        {
            //echo print_r($res->InstituteName);exit;
            echo "<tr><td>".$res->Course."</td><td>".$res->InstituteName."</td><td>".$res->YearOfPassing."</td><td>".$res->Percentage."</td></tr>";
        
        }
    ?>
</table>


<style type="text/css">
    td
    {
        text-align: left;
    }
    table
    {
        background-color: #FAF0E6;
    }
    #user
    {
        width: 100%;
    }
</style>