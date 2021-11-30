<h2>Search Patient</h2>
  <form method="post">
 <input type="hidden" name="action" value="search" /><br>
      <label>Search by Field:</label>
       <select name="fieldName">
            <option value=""></option>
	<option value="id">Patient #</option>		 
  <option value="patientFirstName">First Name</option>
<option value="patientMiddleName">Middle Name</option>
	  <option value="patientLastName">Last Name</option>
	  <option value="patientBirthDate">Date of Birth</option>
	  <option value="patientMarried">Married</option>
          </select>
		  <input type="text" name="fieldValue" value= "<?= $fieldValue ?>">
       
<button type="submit">Search</button>

      
  </form>
  H
