<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Zachary Gonzalez (zg59)</td></tr>
<tr><td> <em>Generated: </em> 11/14/2024 5:56:40 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-milestone1-deliverable/grade/zg59" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T02.06.16email%20not%20available.png.webp?alt=media&token=5eb0be84-c61b-49e6-8928-99358047a5c8"/></td></tr>
<tr><td> <em>Caption:</em> <p>email not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T02.06.37emailverification.png.webp?alt=media&token=b65c75d7-39bd-48ef-9ee0-b059bf6ecf30"/></td></tr>
<tr><td> <em>Caption:</em> <p>email verification<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T02.07.28passwordverification.png.webp?alt=media&token=debb09dd-aa9a-40cb-933c-fef7ca7331a8"/></td></tr>
<tr><td> <em>Caption:</em> <p>password verification <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T02.07.44username.png.webp?alt=media&token=35c32d41-d6b7-41f3-a0f3-2802519edd8a"/></td></tr>
<tr><td> <em>Caption:</em> <p>username not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T02.08.04validaccount.png.webp?alt=media&token=9e0669ef-bde6-47e2-935a-3eb72535ea44"/></td></tr>
<tr><td> <em>Caption:</em> <p>Valid Account and URL showing web address<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T02.11.03user%20table.png.webp?alt=media&token=bdd7e7ac-fbe5-4e09-b455-315d7eb94413"/></td></tr>
<tr><td> <em>Caption:</em> <p>at the bottom last entry milestone1 <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/7">https://github.com/Venrite/IT202-ZG59-7/pull/7</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>the form method is POST which means it doesn&#39;t tamper with the URL,<br>it has a verification for when submit is triggered. it collects the data<br>in text fields which user input is the evaluated to match the type<br>format specified ( email, password, text). The verification uses the form type as<br>the front end while php uses isset() or empty() to check for invalid<br>inputs.<div><br></div><div>the password needs a minimum length and needs to match the confirm password.<br>the password type makes the text entries into asteriks for security. the password<br>is then inserted to the database as a registered User.</div><div><br></div><div>the Database holds onto<br>the our collected data for the website. on the register page it accepts<br>input, login it verifies it exists and matches the query. we can also<br>modify the data and encrypt the data if desired. for our case we<br>use our database to know who has permissions onto which pages.</div><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T02.28.03login%20email%20not%20found.png.webp?alt=media&token=9d8357a7-4478-4868-ab36-5654ee59104a"/></td></tr>
<tr><td> <em>Caption:</em> <p>login email not found<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T02.28.22logininvalidpassword.png.webp?alt=media&token=a3e57290-26d8-4bb9-a6ff-f1daff39d245"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid password for login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T02.29.583loginoccured.png.webp?alt=media&token=ecb8ca40-0a62-4c04-85e0-bdc219c06252"/></td></tr>
<tr><td> <em>Caption:</em> <p>login has occured and also database validation output<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/7">https://github.com/Venrite/IT202-ZG59-7/pull/7</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>well same post method and validate function onsubmit. then&nbsp; we get the database<br>and collect the features we want to validate. then we just check if<br>the email is really in the database, but the password we have to<br>compare its hash against another hash. if those succeed we initialize the users<br>session for the webpage. we then relate the website&nbsp; Roles id feature on<br>the UserRoles role id; this session now has the shared info of a<br>user and his role. and we handle the errors for that user role<br>check.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T03.33.26logoutmessage.png.webp?alt=media&token=ad08f9d0-fb1f-4139-92c0-559af7f466cb"/></td></tr>
<tr><td> <em>Caption:</em> <p>user logged out and no longer has navbar access to &quot;profile&quot; tab. typing<br>profile.php in the URL just redirects to logout which goes to login.php. i<br>pass a tag login if there was an event and it&#39;ll prompt a<br>&quot;logged out message&quot;<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T03.34.37logoutmessage.png.webp?alt=media&token=f9b100a4-182f-459b-abdb-aaa30059d62b"/></td></tr>
<tr><td> <em>Caption:</em> <p>there are no options on the nav bar and typing in the URL<br>will check for for a  logged in user and redirect everyone else<br>to the login page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/7">https://github.com/Venrite/IT202-ZG59-7/pull/7</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>so on the logout.php we inject into the header another parameter and in<br>the login page we check for if that parameter is actually set; And<br>since that is checked first we know it exists and can access it<br>without throwing an error. When we next check if logout is the value<br>we want we can then display the logout message<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T03.48.08adminrights.png.webp?alt=media&token=932cf2a9-d84c-4694-943f-542a25150cf0"/></td></tr>
<tr><td> <em>Caption:</em> <p>i added list_roles to the navbar for this demo (a protected pebpage that<br>checks for admin role). when you are logged out and click on it,<br>it redirects back to the login with a message. it uses the same<br>parameter passing like before.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T03.59.12invalid%20role.png.webp?alt=media&token=211a1a97-bb39-47bc-bb9d-e5b232caf5ac"/></td></tr>
<tr><td> <em>Caption:</em> <p>same as last time, we have list_roles on the navbar even though this<br>user does not have admin privileges. when it&#39;s clicked it redirects to the<br>profile page and displays the permissions message<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T04.01.43roles%20table.png.webp?alt=media&token=f48d4d68-b487-4e5c-b919-bc339f08e1d4"/></td></tr>
<tr><td> <em>Caption:</em> <p>barebones roles but they work<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T04.03.33userroles.png.webp?alt=media&token=16bc7c69-8dbd-4bf4-918f-3c84491b6d76"/></td></tr>
<tr><td> <em>Caption:</em> <p>the first and third account i made in the Users table are admins,<br><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/7">https://github.com/Venrite/IT202-ZG59-7/pull/7</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>so when session _start is called it creates a session if one doesnt<br>already exist. this session can transfer variables accross pages as they share a<br>global &quot;Session&quot;. the session unset just clears the stored session info but maintains<br>the integrity of that session. the session destroy will do as it says,<br>destroy the session and all relevant sessions.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>so when session _start is called it creates a session if one doesnt<br>already exist. this session can transfer variables accross pages as they share a<br>global &quot;Session&quot;. the session unset just clears the stored session info but maintains<br>the integrity of that session. the session destroy will do as it says,<br>destroy the session and all relevant sessions.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T05.35.16styled%20stuff.png.webp?alt=media&token=49f41137-67d0-4528-9d98-13a3d4322c24"/></td></tr>
<tr><td> <em>Caption:</em> <p>made a styles.css that changes up the navbar , added margin spacing for<br>the text boxes, center alligned the table and while it looks bad its<br>a basic prototype for proof of concept.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/7">https://github.com/Venrite/IT202-ZG59-7/pull/7</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>i made the body and html fields (background) a slightly dimmer white, have<br>the containers (the table so far, will add others) brighter and a border<br>shadow. i was aiming for a professional minimalistic, government bland UI<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/7">https://github.com/Venrite/IT202-ZG59-7/pull/7</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>we take errors and flow the users through the failed execution of code<br>by presenting a reason for the disturbance, and maintaining their session as best<br>we can.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T05.42.13profile.png.webp?alt=media&token=994ee615-54a0-4a48-be85-355d5089b8d6"/></td></tr>
<tr><td> <em>Caption:</em> <p>profile page with an auto filled username and email field. added spacing so<br>it felt less congested and didnt do too much to this as i<br>want to make it a container later so that it&#39;ll look like the<br>list roles page a little more.<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/7">https://github.com/Venrite/IT202-ZG59-7/pull/7</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>since they are on the profile page we know they are a logged<br>in user so we can then grab their username and user email and<br>on the form fields just set the value equal to the corresponding field.&nbsp;&nbsp;<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T22.03.11password%20Missmatch.png.webp?alt=media&token=e2a9cc79-d44b-48ed-ab09-3ab30f972ee3"/></td></tr>
<tr><td> <em>Caption:</em> <p>new password entries dont match<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T22.04.44invalid%20password.png.webp?alt=media&token=d96371ec-10e8-4c6a-8d98-97fc27169e23"/></td></tr>
<tr><td> <em>Caption:</em> <p>current password was not correct<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T22.32.53invalid%20email.png.webp?alt=media&token=f80b5aae-c4f9-45f1-a2d6-c2a047c381fa"/></td></tr>
<tr><td> <em>Caption:</em> <p>email/username in use<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T22.35.03validatingemail.png.webp?alt=media&token=de910125-1e4e-410b-94fc-65e248c6817b"/></td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T05.45.22before.png.webp?alt=media&token=28c3f12e-a8c6-42d0-b66c-0856d7902714"/></td></tr>
<tr><td> <em>Caption:</em> <p>before image of the record for milestone user. didnt include the whole table<br>just the row thats gonna change; hopefully that avoids any confusion<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T22.41.02milestonechanged.png.webp?alt=media&token=aecbc7d2-fed9-42fc-8f82-81085e4f000e"/></td></tr>
<tr><td> <em>Caption:</em> <p>this has the email, username, password, and timestamp changed<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/7">https://github.com/Venrite/IT202-ZG59-7/pull/7</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>we just do the same checks as if we were registering but instead<br>of using an insert we update the user entry. check if empty, forms<br>check for format, we make sure things match.<br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-11-14T05.53.13project%20backlog.png.webp?alt=media&token=1288d79e-68a6-4344-8d94-2685f177facf"/></td></tr>
<tr><td> <em>Caption:</em> <p>github projects tab that is a bit outdated but was used to track<br>some tasks<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/Venrite/projects/3/views/1">https://github.com/users/Venrite/projects/3/views/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-milestone1-deliverable/grade/zg59" target="_blank">Grading</a></td></tr></table>
