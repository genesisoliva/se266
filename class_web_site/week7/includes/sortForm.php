<br>
<form  method="post">
    <input type="hidden" name="action" value="sort"> <br>
       <label>Sort By Field:</label>
       <select name="fieldName">
            <option value=""></option>
			<option value="id">Patient #</option>
      <option value="patientFirstName">First Name</option>
<option value="patientMiddleName">Middle Name</option>
	  <option value="patientLastName">Last Name</option>
	  <option value="patientBirthDate">Date of Birth</option>
	  <option value="patientMarried">Married</option>
          </select>
       <input type="radio" name="fieldValue" value="ASC" />Ascending
       <input type="radio" name="fieldValue" value="DESC" />Descending
       
      <button type="submit"  name="sortTeam">Sort</button>
   
      
  </form>
<br>
