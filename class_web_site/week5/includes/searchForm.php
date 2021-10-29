<h2>Search Patient</h2>
  <form action="#" method="post">
      <input type="hidden" name="action" value="search" />
      <label>Search by Field:</label>
       <select name="fieldName">
              <option value="">Select One</option>
              <option value="teamName">Team Name</option>
              <option value="division">Division</option>
              
          </select>
       <input type="text" name="fieldValue" />
      <button type="submit">Search</button>
      
  </form>

  <div class="container" style="text-align:center;"> 


<h2>Search Client</h2>
  <form action="#" method="post">
      <input type="hidden" name="action" value="search" />
      <label>Search by Field:</label>
       <select name="fieldName">
              <option value="">Select</option>
              <option value="clientFirstName">First Name</option>
              <option value="clientLastName">Last Name</option>
              <option value="clientMarried">Status</option>
              <option value="clientBirthDate">Birth Date</option>
              <option value="clientAge">Age</option>
              
          </select>
       <input type="text" name="fieldValue" />
      <button type="submit">Search</button>
      
  </form>
</div>