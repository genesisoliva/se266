
   <h2>Search Team</h2>
  <form method="post">
      <input type="" name="action" value="search" /><br>
      <label>Search by Field:</label>
       <select name="fieldName">
              <option value="">Select One</option>
              <option value="teamName">Team Name</option>
              <option value="division">Division</option>
          </select>
       <input type="text" name="fieldValue" value= "<?= $fieldValue ?>">
<button type="submit">Search</button>

      
  </form>
