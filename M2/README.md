<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Arcade Project</td></tr>
<tr><td> <em>Student: </em> Zachary Gonzalez (zg59)</td></tr>
<tr><td> <em>Generated: </em> 12/15/2024 1:30:44 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-milestone-2-arcade-project/grade/zg59" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediately</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Pick a game... </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> What game will you be doing?</td></tr>
<tr><td> <em>Response:</em> <p>Falling word typing game<br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly describe it and its mechanics</td></tr>
<tr><td> <em>Response:</em> <p>Random words (Unfiltered) are retrieved form an API, they fall on intervals that<br>speed up over time along with increasing the length of the words. score<br>is attained by typing the word, power up such as heal, nuke, and&nbsp;<br>a score multiplier will occasionally fall. this adds a minimal amount of tactical<br>thinking as typing in the times two word before a nuke increases score<br>exponentially<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing something of the game</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-12-15T18.03.57gameworks.png.webp?alt=media&token=b12fdcc8-ae4f-403c-881b-45bec0290ede"/></td></tr>
<tr><td> <em>Caption:</em> <p>words fall, game works, features work<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/8">https://github.com/Venrite/IT202-ZG59-7/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Saving Score </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing a notice telling the user their score was saved</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-12-15T18.05.23scoreworks.png.webp?alt=media&token=6df7d46b-130d-43c1-9606-efa6a324a754"/></td></tr>
<tr><td> <em>Caption:</em> <p>the game acknowledges game over and displays score and some interesting metrics <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of your scores table from the db with some score entries</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-12-15T18.07.13scoresaved.png.webp?alt=media&token=bf6f797f-27eb-48a5-b3c1-d5c6227030fe"/></td></tr>
<tr><td> <em>Caption:</em> <p>VIsual Studio Scores Table. relational databse to Users on user_id and contains a<br>score. each user can have ultiple entries<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add screenshot of the save score code logic</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-12-15T18.10.12Save_score.png.webp?alt=media&token=85315ca4-9b4c-4771-a0b0-9e4e2552ce79"/></td></tr>
<tr><td> <em>Caption:</em> <p>my .JS game sends a POST request to my PHP backend, from there<br>its a simple copy and paste of previous insertions. <br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-12-15T18.14.33save_index.png.webp?alt=media&token=9d44b16b-f8da-4ea0-a9fb-c586a9350072"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the .js POST request<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly describe the code flow of saving a score from the game</td></tr>
<tr><td> <em>Response:</em> <p>I chose to have a user accumulate scores, instead of updating them. i<br>felt it would make it easier and more adaptable to future changes, but<br>also simplified the leaderboards<br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/8">https://github.com/Venrite/IT202-ZG59-7/pull/8</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> User's last 10 scores </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the latest scores for the user from their profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-12-15T18.17.03Profile%20scores.png.webp?alt=media&token=d3e5966d-4370-4127-a86f-65a58f0b2bdb"/></td></tr>
<tr><td> <em>Caption:</em> <p>Logged in account with scores being displayed<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the scores are being pulled and displayed</td></tr>
<tr><td> <em>Response:</em> <p>on the profiles page we grab in the logged in users session ID<br>and compare it to the Scores table, and grab any scores related to<br>that individual sorted by their timestamp<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/8">https://github.com/Venrite/IT202-ZG59-7/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Create function(s) for outputting the 4 different scoreboard durations (daily, weekly, monthly, lifetime) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot (or screenshots) showing the function(s)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-12-15T18.19.46leaderboard.png.webp?alt=media&token=26b67bc1-992a-4565-b74c-1c113973f644"/></td></tr>
<tr><td> <em>Caption:</em> <p>this is the display of two leaderboards, overall shows total, while daily ommits<br>yesterdays score<br></p>
</td></tr>
<tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-12-15T18.21.01leaderboard%20code.png.webp?alt=media&token=d47c1873-fedf-4fa1-9ced-7c5c1e5c3c5f"/></td></tr>
<tr><td> <em>Caption:</em> <p>This is the code which was partially copied form the cars template. all<br>it does it retrieve the info, and echo out a table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain the process of how the code works</td></tr>
<tr><td> <em>Response:</em> <p>Grab the info from the database, use echo to make a table. the<br>table was coppied from the cars template and the htmlspecialchars was retrieved from<br>a previous website dashboard, this addition stops injection attacks<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/8">https://github.com/Venrite/IT202-ZG59-7/pull/8</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Home Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the scoreboads, the link to the game and description, and the proper heading</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-12-15T18.24.16leaderboard.png.webp?alt=media&token=1fe6ff5a-09ac-448d-9082-29eb08003d05"/></td></tr>
<tr><td> <em>Caption:</em> <p>my homepage<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the different pieces are retrieved and shown to the user</td></tr>
<tr><td> <em>Response:</em> <p>.css to make a container where i put the main content in it.<br>the navbar is z-forced into the top and made sticky to stay there,<br>centered most things, aside form that its just the generation of tables in<br>a contianer with center justification.<br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Venrite/IT202-ZG59-7/pull/8">https://github.com/Venrite/IT202-ZG59-7/pull/8</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://firebasestorage.googleapis.com/v0/b/learn-e1de9.appspot.com/o/assignments%2Fzg59%2F2024-12-15T18.29.45project%20BS.png.webp?alt=media&token=b4143f7a-5e6b-4f37-bcb8-44188c747b86"/></td></tr>
<tr><td> <em>Caption:</em> <p>I did not use the project board intensively, i added these additions a<br>while ago but for the most part the only issues i encountered were<br>getting the .JS to send the scores to a .PHP to save them<br>effectviely<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a link to your herok prod project's login page</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-AR451-M2024/it202-milestone-2-arcade-project/grade/zg59" target="_blank">Grading</a></td></tr></table>
