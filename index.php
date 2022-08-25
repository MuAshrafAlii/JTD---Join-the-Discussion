<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/discussion.css" />
    <script src="./assets/logic/discussion.js" defer></script>
    <title>Discussion</title>
  </head>
  <body>
    <h1 class="title">What is the Question</h1>
    <div class="commentsContainer">
      <div class="cmntTitleContainer">
        <h3 class="cmntTitle">Comments</h3>
      </div>
      <div class="commentDetails">
        <div class="ppContainer">
          <img src="./assets/imgs/188210.jpg" alt="Img" class="pp" />
        </div>
        <div class="nameContainer">
          <h1 class="accName">Hamdy Kata</h1>
        </div>
        <div class="cmntContainer">
          <p class="cmnt" contenteditable="false">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi
            tenetur, maiores eaque consectetur, deserunt, repellendus quos
            repellat ipsa laborum iusto saepe assumenda non blanditiis rem enim
            reiciendis qui voluptate dolor. Ipsum exercitationem placeat
            voluptas iusto ad dignissimos consequuntur sapiente. Numquam
            repellendus est, excepturi dolorem beatae cum voluptatem asperiores
            qui reiciendis quidem ad? Odit numquam sunt earum veniam. Sapiente,
            officiis a? Sed harum dolorum necessitatibus? Debitis et fugit
            cupiditate odit neque iure expedita perferendis cum! Labore est
            repellat perferendis voluptas delectus eius nisi aperiam voluptatem
            corporis, dignissimos, perspiciatis repellendus autem illo?
          </p>
        </div>
        <div class="btnsContainer">
          <button class="edit">Edit</button>
          <button class="delete">Delete</button>
        </div>
      </div>
    </div>

    <div class="currCmntContainer">
      <div class="imgContainer">
        <img src="./assets/imgs/60840.jpg" alt="Img" class="currImg" />
        <form class="uploadForm" enctype="multipart/form-data">
          <input type="file" name="imgUploaded" id="uploadInput" />
          <label for="uploadInput" class="uploadBtn">+</label>
        </form>
      </div>
      <div class="myCmntContainer">
        <form class="cmntForm">
          <input
            type="text"
            name="myCmnt"
            class="myCmntInput"
            placeholder="My Comment"
          />
          <button type="submit" class="cmntBtn">Comment</button>
        </form>
      </div>
    </div>
  </body>
</html>