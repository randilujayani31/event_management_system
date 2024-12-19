<form name="Registration" action="createacc_connection.php" method="post">
      <div id="container">
      <h1 class="text-center" style="color: black; padding-top: 1px;">WTR Event Management System</h1>
      <h1>Register Form</h1>
      <p>Kindly fill in this form to register.</p>
      <br>
      <label for="firstname"><b>Firstname</b></label>
        <input
          type="text"
          placeholder="Enter firstname "
          name="firstname"
          id="firstname"
          required
        />
      <label for="lastname"><b>Lastname</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="lastname"
          id="lastname"
          required
        />
      <label for="event"><b>Event</b></label>
        <select>  
          <option value="Course">Event</option>  
          <option value="BCA">Wedding</option>  
          <option value="BBA">Birthday</option>  
          <option value="B.Tech">Anivasary</option>  
          <option value="MBA">Award Ceromony</option>  
          <option value="MCA">Get together</option>  
          <option value="M.Tech">Other</option>  
        </select> 
      <label  for="gender"><b>Gender</b></label>
        <input
          name="gender" 
          type="tex"
          required class="new"
          id="gender"
        
        />
        <label  for="phone"><b>Phone</b></label>
        <input 
          type="text" 
          name="country code"  
          value="+94" 
          size="2"
        />   
        <input 
          type="text" 
          name="phone" 
          size="10"
        />

        <label  for="address"><b>Address</b></label>
        <textarea 
          name="address">  
        </textarea>

        <label  for="email"><b>Email</b></label>
        <input
          name="email" 
          type="text"
          required class="new"
          id="email"
        />

        <label  for="pass"><b>Password</b></label>
        <input
          name="pass" 
          type="text"
          required class="new"
          id="pass"
        
        />
        <label  for="repass"><b>Re-Password</b></label>
        <input
          name="repass" 
          type="text"
          required class="new"
          id="repass"
        
        />
      
      <button class="btnn" type="submit" name="submit">Register</button>
      <br><br>
      
      
    </div>
  </form>