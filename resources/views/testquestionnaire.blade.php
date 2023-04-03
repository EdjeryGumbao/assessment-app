<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sample Data Privacy Assessment Questionnaire</title>
  </head>
  <body>
    <h1>Sample Data Privacy Assessment Questionnaire</h1>
    <form>
      <h2>General Information</h2>
      <p>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
      </p>
      <p>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
      </p>
      
      <h2>Data Collection and Use</h2>
      <p>1. How do you collect personal data from users?</p>
      <select id="q1" name="q1">
        <option value="">Select an option</option>
        <option value="opt1">Through website forms</option>
        <option value="opt2">Through third-party providers</option>
        <option value="opt3">Through offline channels</option>
      </select>
      <p>2. For what purposes do you collect personal data?</p>
      <select id="q2" name="q2">
        <option value="">Select an option</option>
        <option value="opt1">To provide products or services</option>
        <option value="opt2">To personalize user experience</option>
        <option value="opt3">To conduct marketing research</option>
      </select>
      <p>3. Do you share personal data with third parties? If so, for what purposes?</p>
      <select id="q3" name="q3">
        <option value="">Select an option</option>
        <option value="opt1">Yes, for marketing purposes</option>
        <option value="opt2">Yes, for product development</option>
        <option value="opt3">No, we do not share personal data with third parties</option>
      </select>
      
      <h2>Data Storage and Security</h2>
      <p>4. Where do you store personal data?</p>
      <select id="q4" name="q4">
        <option value="">Select an option</option>
        <option value="opt1">On-premise servers</option>
        <option value="opt2">Cloud-based services</option>
        <option value="opt3">Both on-premise servers and cloud-based services</option>
      </select>
      <p>5. How do you ensure the security of personal data?</p>
      <select id="q5" name="q5">
        <option value="">Select an option</option>
        <option value="opt1">By implementing encryption and access controls</option>
        <option value="opt2">By conducting regular security audits</option>
        <option value="opt3">By training employees on data privacy best practices</option>
      </select>
      
      <h2>Data Retention and Deletion</h2>
      <p>6. How long do you retain personal data?</p>
      <select id="q6" name="q6">
        <option value="">Select an option</option>
        <option value="opt1">As long as the user is an active customer</option>
        <option value="opt2">For a specific period of time (please specify):</option>
        <option value="opt3">Until the user requests deletion</option>
      </select>
      <p>7. How do you delete personal data?</p>
      <select id="q7" name="q7">
        <option value="">Select an option</option>
        <option value="opt1">By permanently deleting it from our databases</option>
        <option value="opt2">By anonymizing it</option>
        <option value="opt3">By archiving it for future use</option>
      </select>
      <h2>Data Subject Rights</h2>
  <p>8. Do you provide users with the ability to access, correct, and delete their personal data?</p>
  <select id="q8" name="q8">
    <option value="">Select an option</option>
    <option value="opt1">Yes, we provide all of these rights</option>
    <option value="opt2">No, we only provide some of these rights</option>
    <option value="opt3">No, we do not provide any of these rights</option>
  </select>
  <p>9. How do you verify the identity of users who request to access, correct, or delete their personal data?</p>
  <select id="q9" name="q9">
    <option value="">Select an option</option>
    <option value="opt1">By asking for their email address and password</option>
    <option value="opt2">By requesting additional personal information</option>
    <option value="opt3">By conducting a phone or video call</option>
  </select>
  
  <h2>Consent and Opt-Out</h2>
  <p>10. Do you obtain users' consent before collecting and using their personal data?</p>
  <select id="q10" name="q10">
    <option value="">Select an option</option>
    <option value="opt1">Yes, we obtain explicit consent</option>
    <option value="opt2">Yes, we obtain implied consent</option>
    <option value="opt3">No, we do not obtain consent</option>
  </select>
  <p>11. How do you allow users to opt-out of receiving marketing communications?</p>
  <select id="q11" name="q11">
    <option value="">Select an option</option>
    <option value="opt1">By including an unsubscribe link in emails</option>
    <option value="opt2">By providing a preference center</option>
    <option value="opt3">By not sending any marketing communications</option>
  </select>
  
     <div class="submit-section">
        <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>


<style>
    body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #36393F;
  color: #DCDDDE;
  padding: 20px;
}

form {
  max-width: 800px;
  margin: auto;
}

h1, h2 {
  text-align: center;
  margin-top: 20px;
}

label {
  display: inline-block;
  width: 150px;
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="url"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  background-color: #2C2F33;
  color: #DCDDDE;
}

select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
  background-color: #2C2F33;
  color: #DCDDDE;
}

input[type="checkbox"],
input[type="radio"] {
  margin-right: 10px;
}

textarea {
  min-height: 150px;
}

.submit-section {
  text-align: center;
  margin-top: 40px;
}

button[type="submit"] {
  padding: 10px 20px;
  border-radius: 5px;
  border: none;
  background-color: #7289DA;
  color: #DCDDDE;
  font-size: 18px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #677BC4;
}
</style>