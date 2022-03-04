<style>
/* css variables */
:root {
  --background-image: url(https://wallpaperaccess.com/full/1519722.jpg);
  --primary-color: #8c275f;
  --secondary-color: #f74988;
  --body-color: #011140;
  --body-color-gradient: #011140ec;
  --title-color: #e4e9f2;
  --text-color: #bcbdc0;
  --valid-color: #3de02b;
  --invalid-color: #f11439;
  --transparent: #00000000;
  --font-family: "Poppins", sans-serif;
  --large-font-size: calc(3rem + 1.625vh);
  --medium-font-size: min(calc(1rem + 0.725vh), 1.25rem);
  --small-font-size: min(calc(0.675rem + 0.5vh), 1rem);
}
/* NOTE: all other custom themes' variables are at the end */

/* making sass variables out of the css variables just for ease of use */
$primary: var(--primary-color);
$secondary: var(--secondary-color);
$body-color: var(--body-color);
$body-color-gradient: var(--body-color-gradient);
$title-color: var(--title-color);
$text-color: var(--text-color);
$valid: var(--valid-color);
$invalid: var(--invalid-color);
$tooltip: var(--tooltip-color);
$transparent: var(--transparent);
$font: var(--font-family);
$large: var(--large-font-size);
$medium: var(--medium-font-size);
$small: var(--small-font-size);
$background-image: var(--background-image);

*,
*::before,
*::after {
  box-sizing: border-box;
}

* {
  transition: font-size 0.00001s;
}

/* overriding the browser's autofill styles */
input,
textarea,
select {
  &:-webkit-autofill,
  &:-webkit-autofill:hover,
  &:-webkit-autofill:focus {
    -webkit-text-fill-color: $title-color;
    -webkit-box-shadow: 0 0 0px 1000px $transparent inset;
    box-shadow: 0 0 0px 1000px $transparent inset;
    transition: background-color 5000s 0s;
    &::first-line {
      font-size: $medium;
    }
  }
  &::placeholder {
    color: $text-color;
  }
}

/* hiding the default checkbox and styling a custom one */
input[type="checkbox"] {
  display: none;
  + .checkmark {
    float: left;
    height: $medium;
    width: $medium;
    vertical-align: middle;
    margin-right: 0.4rem;
    align-self: center;
    border: 2px solid $primary;
    border-radius: calc(var(--medium-font-size) / 3);
    transition: 0.25s;
    &::after {
      content: "";
      position: relative;
      opacity: 0;
    }
  }
  &:checked {
    + .checkmark {
      background: $secondary;
      border-color: $secondary;
      &::after {
        opacity: 1;
      }
    }
  }
}

.checkmark-label {
  display: flex;
  align-items: center;
  width: max-content;
  text-align: left;
  -webkit-tap-highlight-color: transparent;
  user-select: none;
  cursor: pointer;
  &:hover {
    .checkmark {
      border-color: $secondary;
    }
  }
  .checkmark::after {
    display: block;
    left: 50%;
    top: 50%;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: translate(-50%, calc(-50% - 2px)) rotate(45deg);
    transition: all 0.25s;
  }
}

/* hiding the default radio and styling a custom one */
input[type="radio"] {
  display: none;
  + .radio {
    float: left;
    height: $medium;
    width: $medium;
    vertical-align: middle;
    margin-right: 0.4rem;
    align-self: center;
    border: 2px solid $primary;
    border-radius: 50%;
    transition: 0.125s;
    &::after {
      content: "";
      position: relative;
      opacity: 0;
    }
  }
  &:checked {
    + .radio {
      background: $secondary;
      border-color: $secondary;
      &::after {
        opacity: 1;
      }
    }
  }
}

.radio-label {
  display: flex;
  align-items: center;
  width: max-content;
  text-align: left;
  -webkit-tap-highlight-color: transparent;
  user-select: none;
  cursor: pointer;
  &:hover {
    .radio {
      background-color: rgba($secondary, 0.25);
      border-color: $secondary;
    }
  }
  .radio::after {
    display: block;
    left: 50%;
    top: 50%;
    width: 5px;
    height: 10px;
    width: 50%;
    height: 50%;
    transform: translate(-50%, -50%);
    background: $title-color;
    border-radius: 50%;
    transition: all 0.1s;
  }
}

/* valid and invalid classes to override color styling on validation */
.valid {
  color: $valid !important;
  border-color: $valid !important;
}

.invalid {
  color: $invalid !important;
  border-color: $invalid !important;
}

body {
  width: 100% !important;
  height: 100% !important;
  overflow: hidden;
  font-family: $font;
  font-size: $medium;
  margin: 0;
  padding: 0;
  color: $text-color;
  background: $background-image no-repeat center center fixed;
  background-size: cover;
}

.block-mobile-landscape {
  display: none;
  position: absolute;
  z-index: 100;
  width: 100%;
  height: 100%;
  background: $body-color;
  font-size: 2.5rem;
  text-transform: capitalize;
  background: linear-gradient(to top, $body-color-gradient, $primary 150%),
    $background-image no-repeat center center fixed;
  background-size: cover;
}

.slider {
  width: 90%;
  max-height: 100%;
  height: 100%;
  overflow: hidden;
  margin-left: 0;
  position: absolute;
  transition: 0.9s;
  &.slide {
    margin-left: 10%;
  }
}

.container {
  width: 200%;
  height: 100%;
  margin-left: 100%;
  position: relative;
  left: 0;
  left: -100%;
  background: linear-gradient(to top, $body-color-gradient, $primary 250%);
  transition: 0.9s;
  &.slide {
    margin-left: 0;
  }
}

.left,
.right {
  width: 50.1%; /* width is 50.1% (not 50%) to avoid weird visual glitching that usually happens on exact measures */
  height: 100%;
  position: absolute;
}

.left {
  left: 0;
}

.right {
  right: 0;
}

.content {
  width: min(100%, 350px);
  padding: 1rem;
  margin: 0 auto;
  top: 50%;
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
  transition: all ease 0.9s;
  &.login {
    top: 0;
    transform: translate(-50%, -120%);
    &.active {
      top: 50%;
      transform: translate(-50%, -50%);
    }
  }
  &.recover {
    top: 120%;
    transform: translate(-50%, 0);
    &.active {
      top: 50%;
      transform: translate(-50%, -50%);
    }
  }
}

.title {
  font-size: $large;
  margin-bottom: 2rem;
  text-align: center;
  color: $title-color;
}

.info {
  position: relative;
}

/* when the label rests on the input border, either the border will go through it or we can give it a solid background which won't work because the container background is a tranclusent gradient. So we will use a trick where the label has an after class to imitate the the border with a label wrapper that contains it from overflowing */
.label-wrapper {
  width: calc(100% - 3.25rem);
  overflow: hidden;
  position: absolute;
  transform: translateY(27px);
  margin-left: 1.5rem;
  font-size: $medium;
  color: $primary;
  transition: 0.4s;
  background: inherit;
  pointer-events: none;
  user-select: none;
  /* I will be using a hover class which I will add with javascript to improve hover effects */
  &.hover {
    color: $secondary;
  }
  /* same this with focus however focus will remain if element has user input */
  &.active {
    font-size: 1rem;
    transform: translateY(-1.5px);
    color: $secondary;
  }
}

.label {
  &.active::after {
    content: "";
    background: $secondary;
    height: 3px;
    margin-left: 3px;
    position: absolute;
    width: 500px;
    top: 50%;
  }
  &.active.valid::after {
    background: $valid;
  }
  &.active.invalid::after {
    background: $invalid;
  }
}

/* the method above works great except for the corner where it looks disconnected because of the border radius, this is where the span class will mask that */
.border-corner-cover {
  position: absolute;
  top: 8px;
  right: 0;
  width: 30px;
  height: 60px;
  border: 3px solid $primary;
  border-left: none; 
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
  transition: 0.4s;
  &.hover, &.active {
    border-top-color: $secondary;
    border-right-color: $secondary;
    border-bottom-color: $secondary;
  }
}

.input {
  width: 100%;
  border: 3px solid $primary;
  background-color: transparent;
  border-radius: 50px;
  transition: 0.4s;
  height: 60px;
  color: $title-color;
  padding: 0 3.5rem 0 1.5rem;
  margin: 0.5rem 0;
  font-size: $medium;
  position: relative;
  &::placeholder {
    color: $invalid;
  }
  &:focus {
    outline: none;
  }
  &.hover {
    border-color: $secondary;
  }
  &.active {
    border-top: none;
    border-color: $secondary;
  }
}

.password {
  padding-right: 5rem; /* password inputs have more padding for the eye-icons */
}

.button {
  width: 100%;
  background-color: $primary;
  font-size: $medium;
  border: 0;
  border-radius: 5px;
  word-spacing: 4px;
  letter-spacing: 1px;
  padding: 1rem;
  text-transform: capitalize;
  font-weight: 600;
  color: $title-color;
  line-height: 16px;
  margin: 0.5rem 0;
  transition: all 0.25s;
  cursor: pointer;
  &:hover {
    background-color: $secondary;
  }
}

.input-icon {
  position: absolute;
  right: 1rem;
  transform: translateY(1.3rem);
  font-size: 2rem;
  opacity: 0;
  transition: 0.4s;
}

.validation-icon {
  transition: 0.4s;
  &.active {
    opacity: 1;
  }
}

.password-eye {
  opacity: 1;
  position: absolute;
  z-index: 2;
  color: $primary;
  &.hover {
    color: $secondary;
  }
  &.active {
    color: $secondary;
  }
  &.visible {
    .password-eye-line {
      opacity: 0;
    }
  }
}

.password-eye-line {
  position: absolute;
  transform: translateX(-2rem);
  bottom: 0.812px;
}

/* password validation icons are pushed more to the right to give space for the eye-icons */
.password-icon {
  right: 3rem;
}

.presubmition-options {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: 30px;
  font-size: $small;
  padding: 0 0.5rem;
  margin: 0.5rem 0;
}

.forgot-pass {
  float: right;
  text-decoration: underline;
  color: $secondary;
  cursor: pointer;
}

.slide-button-container {
  margin-top: 0.5rem;
  color: $title-color;
}

.slide-button {
  color: $secondary;
  cursor: pointer;
}

.recovery-details {
  padding: 0 0.5rem;
  margin: 0 0 1.5rem 0;
  color: $text-color;
}

.send-verification {
  margin-top: 1.5rem;
  margin-bottom: 0;
}

.or {
  width: 100%;
  font-size: 2rem;
  margin: 1.25rem 0 0.75rem 0;
  text-align: center;
  font-weight: 600;
  color: $text-color;
}

.new-account {
  font-size: 1.25rem;
  text-align: center;
  margin-bottom: 2rem;
  span {
    cursor: pointer;
    transition: 0.25s;
    &:hover {
      color: $primary;
    }
  }
}

.back-to-login {
  float: right;
  margin-right: 0.5rem;
  color: $secondary;
  transition: 0.25s;
}

.password-requirements-container {
  height: 0; /* this container's changing height is what gives the password requirements list the expand/collapse effect */
  transition: all 0.4s ease-in-out;
  &.active {
    height: clamp(85px, 11vh, 95px);
    margin: 5px 0;
  }
}

.password-requirements {
  list-style: none;
  font-size: $small;
  margin: 0;
  height: 0;
  padding-left: 1.75rem;
  overflow: hidden;
  transition: all 0.4s ease-in-out;
  &.active {
    height: 100%;
  }
  * {
    transition: 0.4s;
    i {
      transition: 0.125s;
    }
  }
}

.tos {
  width: auto;
  height: 60px;
  margin: 0.5rem 0;
  padding: 0 0.5rem;
  font-size: 9.7px;
  .tos-text {
    width: calc(100% - 2rem);
    a {
      text-decoration: underline;
      color: $secondary;
    }
  }
  .checkmark {
    width: 2rem !important;
    height: 2rem !important;
    &::after {
      width: 0.5rem;
      height: 1rem;
    }
  }
}

/* a tooltip will be shown only on devices that can have hover effects */
@media (hover: hover) {
  .password-eye:hover [data-tooltip] {
    &::before,
    &:after {
      visibility: visible;
      opacity: 1;
      transform: translateY(2.25rem);
    }
  }
  [data-tooltip] {
    text-transform: capitalize;
    font-style: normal;
    &::before,
    &::after {
      position: absolute;
      visibility: hidden;
      opacity: 0;
      pointer-events: none;
      transition: all 0.5s;
      right: 0;
      z-index: 2;
    }
    &::before {
      margin-top: 12px;
      width: 120px;
      padding: 7px;
      border-radius: 5px;
      background-color: $primary;
      color: $title-color;
      content: attr(data-tooltip);
      text-align: center;
      font-size: $small;
      line-height: 1.4;
    }
    &::after {
      margin-left: -15px;
      border-bottom: 15px solid $primary;
      border-right: 15px solid transparent;
      border-left: 15px solid transparent;
      content: "";
    }
  }
}

/* animation class for invalid sumbissions of a form that will be added with javascript */
.invalid-submission {
  animation: shake 0.825s cubic-bezier(.36,.07,.19,.97);
}

@keyframes shake {
  10%, 90% {
    margin: 0 1.5px 0 -1.5px;
  }
  
  20%, 80% {
    margin: 0 -3px 0 3px;
  }

  30%, 50%, 70% {
    margin: 0 6px 0 -6px;
  }

  40%, 60% {
    margin: 0 -6px 0 6px;
  }
}

/* for extra small devices */
@media (max-width: 355px) {
  :root {
    --large-font-size: 2.5rem;
    --medium-font-size: 0.825rem;
    --small-font-size: 0.5rem;
  }
  .checkmark-label .checkmark::after {
    width: 3.75px;
    height: 7.5px;
    transform: translate(-50%, calc(-50% - 1px)) rotate(45deg);
  }
  .label-wrapper {
    transform: translateY(30px);
    &.active {
      transform: translateY(1px);
      font-size: 0.75rem;
    }
  }
  .label.active::after {
    height: 2px;
  }
  .border-corner-cover {
    border-width: 2px;
  }
  .input {
    border-width: 2px;
  }
  .input-icon {
    transform: translateY(1.5rem);
    font-size: 1.5rem;
  }
  .password-icon {
    right: 3rem;
  }
  .password-eye-line {
    transform: translateX(-1.5rem);
  }
  .password-requirements-container.active {
    height: 48px;
  }
  .tos {
    font-size: 2.42vw;
    .checkmark::after {
      width: 0.5rem;
      height: 1rem;
      transform: translate(-50%, calc(-50% - 2px)) rotate(45deg);
    }
  }
}

/* show the mobile-landscape blocking div */
@media (max-width: 967px) and (min-aspect-ratio: 13/9) {
  .block-mobile-landscape {
    display: flex;
    align-items: center;
    justify-content: center;
  }
}
/* the reason min-aspect-ratio is used instead of oreintation above, is because orientation gets broken on phone keyboard popup */

@media (min-width: 968px) and (max-width: 1439px) {
  /* smaller slider on bigger screens */
  .slider {
    width: 50%;
    &.slide {
      margin-left: 50%;
    }
  }
}

@media (min-width: 1440px) {
  .slider {
    width: 30%;
    &.slide {
      margin-left: 70%;
    }
  }
}

/* all what's below is for extra themes and will not be documented */
.open-themes-button {
  position: absolute;
  bottom: 1.5rem;
  right: 1rem;
  width: 3rem;
  height: 3rem;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.25s;
  cursor: pointer;
  background: $primary;
  color: $title-color;
  border: 5px solid $secondary;
  border-radius: 50%;
  &:hover {
    background: $secondary;
  }
}

.themes {
  position: absolute;
  bottom: 0;
  right: 1rem;
  transform: translateY(105%);
  width: 340px;
  height: max-content;
  background: $body-color;
  border: 3.5px solid $secondary;
  border-radius: 20px;
  padding: 1rem;
  font-size: $small;
  color: $title-color;
  transition: 0.8s ease;
  overflow: hidden;
  &.active {
    transform: translateY(-1.5rem);
  }
}

.close-themes-button {
  float: right;
  text-align: end;
  font-size: 2rem;
  cursor: pointer;
  transition: 0.25s;
  &:hover {
    color: $primary;
  }
}

.theme-styles-container {
  display: grid;
  grid-gap: 0.5rem 1rem;
  grid-template-columns: 50% 50%;
  margin: 1.5rem 0 1rem 0;
}

.extra-theme-options {
  margin-top: 1rem;
  .add-own-theme, .remove-themes {
    font-weight: 600;
    cursor: pointer;
  }
  .add-own-theme {
    color: $secondary;
  }
  .remove-themes {
    float: right;
    text-transform: uppercase;
    font-weight: 600;
    color: $invalid;
  }
}

.own-theme, .remove-themes-confirm-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: inherit;
  transition: 0.8s ease;
}

.back-to-themes {
  cursor: pointer;
    &:hover {
      color: $primary;
    }
}

.own-theme {
  padding: 1rem;
  transform: translateX(-100%);
  &.active {
    transform: translateX(0);
  }
  .clear-custom-theme {
    float: right;
    cursor: pointer;
    &:hover {
      color: $primary;
    }
  }
  form {
    padding: 0 0.35rem;
    margin-top: 1rem;
    div {
      label {
        color: $title-color;
        padding: 2px;
      }
      input {
        border: 0;
        background: transparent;
        color: $text-color;
        outline: none;
        &[type=color] {
          width: $medium;
          height: $medium;
          padding-right: 5px;
        }
      }
    }
    div.colors {
      display: grid;
      grid-gap: 0.725rem;
      grid-template-columns: 50% 50%;
      margin: 0.725rem 0;
    }
    > div:first-child {
      border-bottom: 1px solid $primary;
    }
  }
}

.remove-themes-confirm-container {
  padding: 1rem 1.5rem;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  align-items: center;
  font-size: $medium;
  transform: translateX(100%);
  > div {
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
  }
  &.active {
    transform: translateX(0);
  }
}

.remove-themes-confirm {
  color: $invalid;
  font-weight: 900;
  cursor: pointer;
}

/* if your device is this small you are making my life harder and don't deserve to customize your theme */
@media (max-width: 355px) /* I also had max height but removed it for this pen */ {
  .open-themes-button, .themes {
    display: none;
  }
}

body {
  &.winter {
    --background-image: url(https://www.teahub.io/photos/full/124-1245972_wallpaper-house-winter-snow-forest-comfort-winter-forest.jpg);
    --primary-color: #3b3b40;
    --secondary-color: #a68851;
    --body-color: #747c8c;
    --body-color-gradient: #747c8cec;
    --title-color: #ccd0d9;
    --text-color: #aab3bf;
    --valid-color: #6eba9e;
    --invalid-color: #e25822; 
  }
  &.fall {
    --background-image: url(https://wallpaperaccess.com/full/1164947.jpg);
    --primary-color: #0D0D0D;
    --secondary-color: #d46707;
    --body-color: #773b03;
    --body-color-gradient: #773b03e0;
    --title-color: #e9f6f8;
    --text-color: #daf0f5;
    --valid-color: #03755e;
    --invalid-color: #d63114;
  }
  &.sunset {
    --background-image: url(https://i.imgur.com/o6eWHwI_d.webp?maxwidth=1520&fidelity=grand);
    --primary-color: #262523;
    --secondary-color: #b98e66;
    --body-color: #9b4e22;
    --body-color-gradient: #9b4e22ec;
    --title-color: #c9cdd1;
    --text-color: #acb8c5;
    --valid-color: #A5FAD6;
    --invalid-color: #F54040;
    --transparent: rgba(0, 0, 0, 0);
  }
  &.mountain {
    --background-image: url(https://i.imgur.com/NWC1ak5_d.webp?maxwidth=1520&fidelity=grand);
    --primary-color: #F2EEEB;
    --secondary-color: #a57c6e;
    --body-color: #08080D;
    --body-color-gradient: #08080DEC;
    --title-color: #a5a4a8;
    --text-color: #848488;
    --valid-color: #00ff00;
    --invalid-color: #ff0000;
  }
  &.city {
    --background-image: url(https://free4kwallpapers.com/uploads/originals/2019/05/20/streetlight-wallpaper.jpg);
    --primary-color: #41497a;
    --secondary-color: #04326d;
    --body-color: #0C0D07;
    --body-color-gradient: #0C0D07EC;
    --title-color: #e6e3c1;
    --text-color: #cbcbcb;
    --valid-color: #07F292;
    --invalid-color: #F20530;
    --transparent: rgba(0, 0, 0, 0);
  }
  &.ocean {
    --background-image: url(https://i.imgur.com/Ajtf6P2.jpeg);
    --primary-color: #063135;
    --secondary-color: #7ddde6;
    --body-color: #038c8c;
    --body-color-gradient: #038c8cec;
    --title-color: #E4EBF2;
    --text-color: #BACBD9;
    --valid-color: #05cf93;
    --invalid-color: #692c0b;
  }
  &.lanterns {
    --background-image: url(https://storge.pic2.me/upload/786/5fd0b499503507.44994773.jpg);
    --primary-color: #F29BAB;
    --secondary-color: #8188e9;
    --body-color: #010440;
    --body-color-gradient: #010440ec;
    --title-color: #f3ebf0;
    --text-color: #f1e1eb;
    --valid-color: #91f6b2;
    --invalid-color: #db2b66;
    --transparent: rgba(0, 0, 0, 0);
  }
}
</style>


<div>
<!-- I did my best to fully document this page so I hope you find everything well explained and detailed for your understanding :D
And if you do, a like/comment/pin would be much apprecieated :) -->

<!-- PS: make sure to interact with everything for hidden features -->

<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> <!-- stylesheet of all the used icons -->

<div class="block-mobile-landscape">Please rotate your device</div> <!-- this div will be visible only when the user has a mobile in landscape mode as it is too small for the content -->
  
  <div class="slider" id="slider">

    <div class="container" id="container">

      <div class="left" id="left">

        <div class="content login active" id="login">
          <div class="title">Login</div>
          <!-- every form's validation and sumbission will be done with js -->
          <form method="post" novalidate>
            <div class="info">
              <div class="label-wrapper"><label class="label" for="user"><i class="uil uil-user"></i>&nbsp; Email or phone number</label></div>
              <!-- I left these icons in case someone wants to use them with server side development so they won't be used here -->
              <i class="uil uil-check-circle validation-icon valid input-icon"></i>
              <i class="uil uil-times-circle validation-icon invalid input-icon"></i>
              <input name="user" type="text" class="input" required>
              <!-- more on this span in the css -->
              <span class="border-corner-cover"></span>
            </div>
            <div class="info">
              <div class="label-wrapper"><label class="label" for="password"><i class="uil uil-lock-alt"></i>&nbsp; Password</label></div>
              <i class="uil uil-check-circle validation-icon valid input-icon password-icon"></i>
              <i class="uil uil-times-circle validation-icon invalid input-icon password-icon"></i>
              <input name="password" type="password" class="input password" required>
              <span class="border-corner-cover"></span>
              <i class="uil uil-eye input-icon password-eye"><i class="uil uil-line-alt password-eye-line"></i><span data-tooltip = "show password"></span></i>
            </div>
            <div class="info">
              <div class="presubmition-options">
                  <label for="remember-me" class="checkmark-label"><input type="checkbox"><span class="checkmark"></span><span>Remember me</span></label>
                  <span class="forgot-pass" id="forgot-pass">Forgot password?</span>
              </div>
            </div>
            <button type="submit" class="button">Sign In</button>
          </form>
          <!-- the button responsible for sliding -->
          <div class="slide-button-container">Don't have an account? <span id="signup-slide-button" class="slide-button">Sign Up</span></div>
        </div>

        <div class="content recover" id="recover">
          <div class="title">Recover Account</div>
          <form method="post" novalidate>
            <div class="recovery-details">Enter your email or phone and we'll send you a link to get back into your account.</div>
            <div class="info">
              <div class="label-wrapper"><label class="label" for="user"><i class="uil uil-mailbox"></i>&nbsp; Email or phone</label></div>
              <i class="uil uil-check-circle validation-icon valid input-icon"></i>
              <i class="uil uil-times-circle validation-icon invalid input-icon"></i>
              <input name="user" type="text" class="input" required>
              <span class="border-corner-cover"></span>
            </div>
            <button type="submit" class="button send-verification">Send Link</button>
            <div class="or">OR</div>
            <div class="new-account"><span id="new-account">Create New Account</span></div>
          </form>
          <div class="slide-button-container"><span id="back-to-login" class="slide-button back-to-login">Back to Login</span></div>
        </div>
      </div>
      
      <div class="right" id="right">
        <div class="content">

          <div class="title">Sign Up</div>
          <form method="post" novalidate>
            <div class="info">
              <div class="label-wrapper"><label class="label" for="user" id="user-label"><i class="uil uil-envelope-alt"></i>&nbsp; Email or phone number</label></div>
              <i class="uil uil-check-circle validation-icon valid input-icon"></i>
              <i class="uil uil-times-circle validation-icon invalid input-icon"></i>
              <input name="user" type="text" class="input" id="user" required>
              <span class="border-corner-cover"></span>
            </div>
            <div class="info">
              <div class="label-wrapper"><label class="label" for="password" id="password-label"><i class="uil uil-lock"></i>&nbsp; Password</label></div>
              <i class="uil uil-check-circle validation-icon valid input-icon password-icon"></i>
              <i class="uil uil-times-circle validation-icon invalid input-icon password-icon"></i>
              <input name="password" type="password" class="input password" id="password" required>
              <span class="border-corner-cover"></span>
              <i class="uil uil-eye input-icon password-eye"><i class="uil uil-line-alt password-eye-line"></i><span data-tooltip = "show password"></span></i>
              <div class="password-requirements-container" id="password-requirements-container">
                <ul class="password-requirements" id="password-requirements">
                  <li id="password-requirements-length"><i class="uil uil-info-circle"></i>&nbsp;Between 8 and 32 characters</li>
                  <li id="password-requirements-number"><i class="uil uil-info-circle"></i>&nbsp;Contains at least 1 number</li>
                  <li id="password-requirements-lower"><i class="uil uil-info-circle"></i>&nbsp;Contains at least 1 lowercase letter</li>
                  <li id="password-requirements-upper"><i class="uil uil-info-circle"></i>&nbsp;Contains at least 1 uppercase letter</li>
                  <li id="password-requirements-special"><i class="uil uil-info-circle"></i>&nbsp;Contains at least 1 special character</li>
                </ul>
              </div>
            </div>
            <div class="info">
              <div class="label-wrapper"><label class="label" for="confirm-password" id="confirm-password-label"><i class="uil uil-lock-access"></i>&nbsp; Confirm password</label></div>
              <i class="uil uil-check-circle validation-icon valid input-icon password-icon"></i>
              <i class="uil uil-times-circle validation-icon invalid input-icon password-icon"></i>
              <input name="confirm-password" type="password" class="input password" id="confirm-password" required>
              <span class="border-corner-cover"></span>
              <i class="uil uil-eye input-icon password-eye"><i class="uil uil-line-alt password-eye-line"></i><span data-tooltip = "show password"></span></i>
            </div>
            <div class="info">
              <label for="tos" class="checkmark-label tos"><input type="checkbox" required><span class="checkmark"></span><span class="tos-text">I HAVE MOST DEFINITELY SPENT 10 HOURS OF MY TIME IN ORDER TO HAVE READ AND AGREED TO THE <a>TERMS OF SERVICE</a> AND <a> PRIVACY POLICY</a></span></label>
            </div>
            <button type="submit" class="button">Register</button>
          </form>
          <div class="slide-button-container">Already have an account? <span id="login-slide-button" class="slide-button">Login</span></div>

        </div>
        
      </div>

    </div>

  </div>
  
  <!-- Everything below is for extra themes and will not be documented -->
  <i class="uil uil-sort-amount-up open-themes-button" id="open-themes"></i>
  <div class="themes" id="themes">
    <i class="uil uil-sort-amount-down close-themes-button" id="close-themes"></i>
    <span> Here are some other themes which I made that you can choose from: </span>
    <div class="theme-styles-container">
      <label for="sakura" class="radio-label theme-label"><input type="radio" name="theme" checked><span class="radio"></span>Sakura (default)</label>
      <label for="winter" class="radio-label theme-label"><input type="radio" name="theme"><span class="radio"></span>Winter</label> 
      <label for="fall" class="radio-label theme-label"><input type="radio" name="theme"><span class="radio"></span>Fall</label>
      <label for="sunset" class="radio-label theme-label"><input type="radio" name="theme"><span class="radio"></span>Sunset</label>
      <label for="mountain" class="radio-label theme-label"><input type="radio" name="theme"><span class="radio"></span>Mountain</label>
      <label for="city" class="radio-label theme-label"><input type="radio" name="theme"><span class="radio"></span>City Lights</label>
      <label for="ocean" class="radio-label theme-label"><input type="radio" name="theme"><span class="radio"></span>Ocean</label>
      <label for="lanterns" class="radio-label theme-label"><input type="radio" name="theme"><span class="radio"></span>Floating Lanterns</label>
    </div>
    <span>*Theme images are in 4k-8k resolution so please wait for them to load.</span>
    <div class="extra-theme-options">
      <span class="add-own-theme" id="add-own-theme">Add your own theme</span>
      <span class="remove-themes" id="remove-themes">Remove palette</span>
    </div>
    <div class="own-theme">
      <span class="back-to-themes" id="back-from-own-theme"><i class="uil uil-arrow-left"></i>Back </span>
      <span class="clear-custom-theme" id="clear-custom-theme">Clear Custom Theme</span>
      <form id="custom-theme-form" autocomplete="off">
        <div><label for="--background-image">Background: </label><input name="--background-image" class="own-theme-input" placeholder="An image, usually of nature"></div>
        <div class="colors">
          <div><input type="color" name="--primary-color" class="own-theme-input"><label for="--primary-color">Primary-Color</label></div>
          <div><input type="color" name="--secondary-color" class="own-theme-input"><label for="--secondary-color">Secondary-Color</label></div>
          <div><input type="color" name="--body-color" class="own-theme-input"><label for="--body-color">Body-Color</label></div>
          <div><input type="color" name="--title-color" class="own-theme-input"><label for="--title-color">Title-Color: </label></div>
          <div><input type="color" name="--text-color" class="own-theme-input"><label for="--text-color"></label>Text-Color</div>
          <div><input type="color" name="--valid-color" class="own-theme-input"><label for="--valid-color"></label>Valid-Color</div>
          <div><input type="color" name="--invalid-color" class="own-theme-input"><label for="--invalid-color"></label>Invalid-Color</div>
        </div>
        <input type="submit" class="button" value="Apply Theme">
      </form>
    </div>
    <div class="remove-themes-confirm-container">
      <span>Are you sure you would like to remove this palette completely?</span>
      <span>You will be unable to pick or make new themes unless you refresh the page.</span> 
      <div>
        <span class="back-to-themes" id="back-from-remove-themes"><i class="uil uil-arrow-left"></i>Back</span>
        <span class="remove-themes-confirm" id="remove-themes-confirm">CONFIRM</span>
      </div>
    </div>
  </div>

</div>

<script>
// all needed ids and classes:
const slider = document.getElementById('slider'), container = document.getElementById('container'), right = document.getElementById('right'), login = document.getElementById('login'), recover = document.getElementById('recover'), forgotPassButton = document.getElementById('forgot-pass'), BackToLoginButton = document.getElementById('back-to-login'), newAccountButton = document.getElementById('new-account'), signupSlideButton = document.getElementById('signup-slide-button'), loginSlideButton = document.getElementById('login-slide-button'), 
// I used some Id's below since I do not need all the elements without server side application
user = document.getElementById('user'), password = document.getElementById('password'), passwordConfirmation = document.getElementById('confirm-password'), userLabel = document.getElementById('user-label'), passwordLabel = document.getElementById('password-label'), passwordConfirmationLabel = document.getElementById('confirm-password-label'), passwordRequirementsContainer = document.getElementById('password-requirements-container'), passwordRequirements = document.getElementById('password-requirements'), passwordRequirementsLength = document.getElementById('password-requirements-length'), passwordRequirementsNumber = document.getElementById('password-requirements-number'), passwordRequirementsLower = document.getElementById('password-requirements-lower'), passwordRequirementsUpper = document.getElementById('password-requirements-upper'), passwordRequirementsSpecial = document.getElementById('password-requirements-special'), forms = document.querySelectorAll('form'), inputs = document.querySelectorAll('.input'), passwordInputs = document.querySelectorAll('input[type="password"]'), validationIcons = document.querySelectorAll('.validation-icon'), labelWrappers = document.querySelectorAll('.label-wrapper'), labels = document.querySelectorAll('.label'), passwordEyes = document.querySelectorAll('.password-eye'), checkboxes = document.querySelectorAll('input[type="checkbox"]'), checkmarks = document.querySelectorAll('.checkmark'), checkmarkLabels = document.querySelectorAll('.checkmark-label'), radios = document.querySelectorAll('input[type="radio"]'), radioButtons = document.querySelectorAll('.radio'), radioButtonLabels = document.querySelectorAll('.radio-label');
// input validation regular expressions
const validMail = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/, validPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^a-zA-Z\d\s]).{8,32}$/;
// login/signup slide function
const sliding = () => {
    signupSlideButton.onclick = () => {
        slider.classList.add('slide');
        container.classList.add('slide');
        right.classList.add('active'); // this will be used to reposition the signup slide in case it was active and the window changes
    };
    loginSlideButton.onclick = () => {
        slider.classList.remove('slide');
        container.classList.remove('slide');
        right.classList.remove('active');
    };
    forgotPassButton.onclick = () => {
        login.classList.remove('active');
        recover.classList.add('active');
    };
    BackToLoginButton.onclick = () => {
        recover.classList.remove('active');
        login.classList.add('active');
    };
    newAccountButton.onclick = () => {
        slider.classList.add('slide');
        container.classList.add('slide');
        setTimeout(() => {
            right.classList.add('active');
            recover.classList.remove('active');
            login.classList.add('active');
        }, 900);
    };
};
// function to check if the password and password confirmation inputs are equal
const confirmPassword = () => {
    if (password.value == passwordConfirmation.value)
        return true;
    return false;
};
// function to be called for styling valid/invalid/empty/focused inputs and their labels and icons
const validationStyling = (type, input, label, iconIndex) => {
    iconIndex *= 2;
    let eyeIndex;
    if ((eyeIndex = Array.from(passwordInputs).indexOf(input)) == -1)
        eyeIndex = null; // transfrom the passwordInputs nodeList to an array and check if the input belongs to it (aka is a password input) and if yes assign its index to eyeIndex (otherwise eyeIndex is null)
    if (type == 'valid') {
        input.classList.remove('invalid');
        input.classList.add('valid');
        input.nextElementSibling.classList.remove('invalid');
        input.nextElementSibling.classList.add('valid');
        label.classList.remove('invalid');
        label.classList.add('valid');
        validationIcons[iconIndex + 1].classList.remove('active');
        validationIcons[iconIndex].classList.add('active');
        if (eyeIndex)
            passwordEyes[eyeIndex].classList.add('valid');
    }
    else if (type == 'invalid') {
        input.classList.remove('valid');
        input.classList.add('invalid');
        label.classList.remove('valid');
        label.classList.add('invalid');
        input.nextElementSibling.classList.remove('valid');
        input.nextElementSibling.classList.add('invalid');
        validationIcons[iconIndex].classList.remove('active');
        validationIcons[iconIndex + 1].classList.add('active');
        if (eyeIndex)
            passwordEyes[eyeIndex].classList.add('invalid');
    }
    else if (type == 'empty' || type == 'focused') {
        input.classList.remove('valid');
        input.classList.remove('invalid');
        label.classList.remove('valid');
        label.classList.remove('invalid');
        input.nextElementSibling.classList.remove('valid');
        input.nextElementSibling.classList.remove('invalid');
        validationIcons[iconIndex].classList.remove('active');
        validationIcons[iconIndex + 1].classList.remove('active');
        if (eyeIndex) {
            passwordEyes[eyeIndex].classList.remove('valid');
            passwordEyes[eyeIndex].classList.remove('invalid');
        }
    }
    // if the input is the sign up password, the password confirmation inputs gets focused as well
    if (input == password) {
        validationStyling('focused', passwordConfirmation, passwordConfirmationLabel, 5);
    }
};
// function to add/remove styling classes for active input elements and their labels
const inputStyling = () => {
    for (let i = 0; i < inputs.length; i++) {
        let elements = [inputs[i], labelWrappers[i], labels[i]];
        // the two arrays below will be used to determine the change before and after an input's focus
        let values = new Array(inputs.length);
        let states = new Array(inputs.length);
        inputs[i].onmouseover = () => {
            elements.forEach(elm => {
                elm.classList.add('hover');
            });
            inputs[i].nextElementSibling.classList.add('hover'); // for styling the corner span
            if (inputs[i].nextElementSibling.nextElementSibling)
                inputs[i].nextElementSibling.nextElementSibling.classList.add('hover'); // for styling eye-icons if they exist
        };
        inputs[i].onmouseout = () => {
            elements.forEach(elm => {
                elm.classList.remove('hover');
            });
            inputs[i].nextElementSibling.classList.remove('hover');
            if (inputs[i].nextElementSibling.nextElementSibling)
                inputs[i].nextElementSibling.nextElementSibling.classList.remove('hover');
        };
        inputs[i].onfocus = () => {
            // if the input was already valid/invalid its state will be stored in the states array (if not it is null)
            if (inputs[i].classList.contains('valid'))
                states[i] = 'valid';
            else if (inputs[i].classList.contains('invalid'))
                states[i] = 'invalid';
            else
                states[i] = null;
            validationStyling('focused', inputs[i], labels[i], i); // remove any valid/invalid styling classes if the element is focused
            elements.forEach(elm => {
                elm.classList.add('active');
            });
            inputs[i].nextElementSibling.classList.add('active');
            if (inputs[i].nextElementSibling.nextElementSibling)
                inputs[i].nextElementSibling.nextElementSibling.classList.add('active');
            if (inputs[i] == password) { // if input is sign up password, show password requirements list
                passwordRequirementsContainer.classList.add('active');
                passwordRequirements.classList.add('active');
            }
            // if the input already had a value it's value will be stored in the values array (if not it is null)
            if (inputs[i].value != '')
                values[i] = inputs[i].value;
            else
                values[i] = null;
        };
        inputs[i].onblur = () => {
            if (inputs[i].value == '') {
                elements.forEach(elm => {
                    elm.classList.remove('active');
                });
                inputs[i].nextElementSibling.classList.remove('active');
                if (inputs[i].nextElementSibling.nextElementSibling)
                    inputs[i].nextElementSibling.nextElementSibling.classList.remove('active');
                if (inputs[i] == password) {
                    // if the input is the sign up password and is empty, all styling for the requirement list is removed
                    Array.from(passwordRequirements.children).forEach(elm => {
                        elm.classList.remove('valid');
                        elm.classList.remove('invalid');
                        elm.firstElementChild.classList.remove('uil-check-circle');
                        elm.firstElementChild.classList.remove('uil-times-circle');
                        elm.firstElementChild.classList.add('uil-info-circle');
                    });
                }
            }
            // since the focus removes existing valid/invalid styling classes we will bring them back if the value before and after focus didn't change
            else if (states[i] && inputs[i].value == values[i]) {
                validationStyling(states[i], inputs[i], labels[i], i);
            }
            // if password and password confirmation are both not empty check if they match or not and style accordingly
            if ((inputs[i] == password || inputs[i] == passwordConfirmation) && password.value != '' && passwordConfirmation.value != '') {
                if (confirmPassword())
                    validationStyling('valid', passwordConfirmation, passwordConfirmationLabel, 5);
                else
                    validationStyling('invalid', passwordConfirmation, passwordConfirmationLabel, 5);
            }
            // if input is sign up password, hide password requirements list
            if (inputs[i] == password) {
                passwordRequirementsContainer.classList.remove('active');
                passwordRequirements.classList.remove('active');
                // put invalid class for every requirement without a valid class
                Array.from(passwordRequirements.children).forEach(elm => {
                    if (!elm.classList.contains('valid') && password.value != '') {
                        elm.classList.add('invalid');
                        elm.firstElementChild.classList.remove('uil-info-circle');
                        elm.firstElementChild.classList.add('uil-times-circle');
                    }
                });
            }
        };
    }
};
// show/hide password function
const passwordVisibility = () => {
    for (let i = 0; i < passwordEyes.length; i++) {
        passwordEyes[i].onclick = () => {
            if (passwordEyes[i].classList.contains('visible')) {
                passwordEyes[i].classList.remove('visible');
                passwordEyes[i].lastElementChild.attributes["data-tooltip"].value = 'show password';
                passwordInputs[i].type = 'password';
            }
            else {
                passwordEyes[i].classList.add('visible');
                passwordEyes[i].lastElementChild.attributes["data-tooltip"].value = 'hide password';
                passwordInputs[i].type = 'text';
            }
        };
    }
};
// function for selecting the custom checkboxes and radios
const check = () => {
    for (let i = 0; i < checkmarkLabels.length; i++) {
        checkmarkLabels[i].onclick = () => {
            if (checkboxes[i].checked == false) {
                checkboxes[i].checked = true;
            }
            else {
                checkboxes[i].checked = false;
            }
        };
    }
    for (let i = 0; i < radioButtonLabels.length; i++) {
        radioButtonLabels[i].onclick = () => {
            if (radios[i].checked == false)
                radios[i].checked = true;
        };
    }
};
// function to validate sign up inputs
const inputValidation = () => {
    user.onchange = () => {
        if (user.value != '') {
            if (validMail.test(user.value) || !isNaN(user.value.replace(/\+|-|\\|\/|\.|\(|\)|\[|]|\s/g, '')))
                validationStyling('valid', user, userLabel, 3); // use the email and phone number regular expression to verify input
            else
                validationStyling('invalid', user, userLabel, 3);
        }
        else
            validationStyling('empty', user, userLabel, 3);
    }; // disclaimer: phone number shouldn't be verified on client side, if you would like to actually verify a phone a number I recommend checking https://github.com/google/libphonenumber
    password.onchange = () => {
        if (password.value != '') {
            if (validPassword.test(password.value))
                validationStyling('valid', password, passwordLabel, 4);
            else
                validationStyling('invalid', password, passwordLabel, 4);
        }
        else
            validationStyling('empty', password, passwordLabel, 4);
    };
    passwordConfirmation.onchange = () => {
        if (passwordConfirmation.value != '') {
            if (confirmPassword())
                validationStyling('valid', passwordConfirmation, passwordConfirmationLabel, 5);
            else
                validationStyling('invalid', passwordConfirmation, passwordConfirmationLabel, 5);
        }
        else
            validationStyling('empty', passwordConfirmation, passwordConfirmationLabel, 5);
    };
    password.oninput = () => {
        let value = password.value;
        const valid = (requirement) => {
            if (!requirement.classList.contains('invalid'))
                requirement.firstElementChild.classList.remove('uil-info-circle'); // remove info-circle icon in case it's present (aka invalid class has not been set yet with x-icon)
            requirement.classList.remove('invalid');
            requirement.classList.add('valid');
            requirement.firstElementChild.classList.remove('uil-times-circle');
            requirement.firstElementChild.classList.add('uil-check-circle');
        };
        const invalid = (requirement) => {
            if (requirement.classList.contains('valid')) { // only put invalid styles if the input isn't initially validated after first appearance
                requirement.classList.remove('valid');
                requirement.classList.add('invalid');
                requirement.firstElementChild.classList.remove('uil-check-circle');
                requirement.firstElementChild.classList.add('uil-times-circle');
            }
        };
        // from here on validate every requirement by itself
        if (value.length >= 8 && value.length <= 32)
            valid(passwordRequirementsLength);
        else
            invalid(passwordRequirementsLength);
        if (/(?=.*[0-9])/.test(value))
            valid(passwordRequirementsNumber);
        else
            invalid(passwordRequirementsNumber);
        if (/(?=.*[a-z])/.test(value))
            valid(passwordRequirementsLower);
        else
            invalid(passwordRequirementsLower);
        if (/(?=.*[A-Z])/.test(value))
            valid(passwordRequirementsUpper);
        else
            invalid(passwordRequirementsUpper);
        if (/(?=.*[^a-zA-Z\d\s])/.test(value))
            valid(passwordRequirementsSpecial);
        else
            invalid(passwordRequirementsSpecial);
    };
};
// function for handling the submission of forms
const sumbitForms = () => {
    forms.forEach(form => {
        form.onsubmit = () => {
            form.querySelectorAll('.info').forEach(infoBox => {
                let input = infoBox.querySelector('[required]');
                if (input) {
                    if (input.classList.contains("invalid") || input.value == '' || (input.type == 'checkbox' && !input.checked)) {
                        infoBox.classList.add('invalid-submission');
                        setTimeout(() => {
                            infoBox.classList.remove('invalid-submission');
                        }, 825); // timeout is used to remove class after its animation is finished
                    }
                    return false;
                }
            });
            return false; // this is just a simple function to shake empty/invalid inputs and will not do anything else since it has no server side application
        };
    });
};
window.addEventListener('DOMContentLoaded', () => {
    sliding();
    inputStyling();
    passwordVisibility();
    check();
    inputValidation();
    sumbitForms();
});
window.onresize = () => {
    if (right.classList.contains('active'))
        signupSlideButton.click(); // reposition signup slide if it was previously active
};
// all what's below is for extra themes and will not be documented
const extraThemes = () => {
    const openThemesButton = document.getElementById('open-themes'), themes = document.getElementById('themes'), themeLabels = document.querySelectorAll('.theme-label'), form = document.getElementById('custom-theme-form');
    const buttonFunctions = () => {
        openThemesButton.onclick = () => {
            themes.classList.add('active');
        };
        document.getElementById('close-themes').onclick = () => {
            themes.classList.remove('active');
        };
        document.getElementById('add-own-theme').onclick = () => {
            document.querySelector('.own-theme').classList.add('active');
        };
        document.getElementById('back-from-own-theme').onclick = () => {
            document.querySelector('.own-theme').classList.remove('active');
        };
        document.getElementById('remove-themes').onclick = () => {
            document.querySelector('.remove-themes-confirm-container').classList.add('active');
        };
        document.getElementById('back-from-remove-themes').onclick = () => {
            document.querySelector('.remove-themes-confirm-container').classList.remove('active');
        };
        document.getElementById('remove-themes-confirm').onclick = () => {
            openThemesButton.remove();
            themes.remove();
        };
    };
    const setCustomThemeForm = () => {
        Array.from(form.children[1].children).forEach(child => {
            let input = child.firstElementChild;
            if (input.name == '--primary-color')
                input.value = getComputedStyle(document.body).getPropertyValue('--primary-color').replace(/\s/g, '');
            else if (input.name == '--secondary-color')
                input.value = getComputedStyle(document.body).getPropertyValue('--secondary-color').replace(/\s/g, '');
            else if (input.name == '--body-color')
                input.value = getComputedStyle(document.body).getPropertyValue('--body-color').replace(/\s/g, '');
            else if (input.name == '--title-color')
                input.value = getComputedStyle(document.body).getPropertyValue('--title-color').replace(/\s/g, '');
            else if (input.name == '--text-color')
                input.value = getComputedStyle(document.body).getPropertyValue('--text-color').replace(/\s/g, '');
            else if (input.name == '--valid-color')
                input.value = getComputedStyle(document.body).getPropertyValue('--valid-color').replace(/\s/g, '');
            else if (input.name == '--invalid-color')
                input.value = getComputedStyle(document.body).getPropertyValue('--invalid-color').replace(/\s/g, '');
        });
    };
    const selectTheme = () => {
        for (let i = 0; i < themeLabels.length; i++) {
            themeLabels[i].addEventListener('click', () => {
                if (!document.body.classList.contains(themeLabels[i].htmlFor)) {
                    document.body.className = '';
                    document.body.removeAttribute('style');
                    document.body.classList.add(themeLabels[i].htmlFor);
                    setCustomThemeForm();
                }
            });
        }
    };
    document.getElementById('clear-custom-theme').onclick = () => {
        document.body.removeAttribute('style');
        setCustomThemeForm();
    };
    form.onsubmit = (e) => {
        e.preventDefault;
        let body = document.body, formdata = new FormData(form), customTheme = '';
        body.removeAttribute('style');
        for (let pair of formdata.entries()) {
            if (pair[0] == '--background-image') {
                if (pair[1]) {
                    let http = new XMLHttpRequest();
                    http.open("GET", pair[1], true);
                    http.send();
                    http.onloadend = () => {
                        let st = http.status;
                        if (st == 0)
                            alert('Invalid Background URL');
                        else if (st == 404)
                            alert('Background URL not Found');
                        else if (st == 200)
                            body.setAttribute('style', pair[0] + ':url(' + pair[1] + ');' + body.getAttribute('style'));
                    };
                }
            }
            else
                customTheme += pair[0] + ':' + pair[1] + ';';
            if (pair[0] == '--body-color') {
                customTheme += '--body-color-gradient:' + pair[1] + 'ec;';
            }
        }
        body.setAttribute('style', customTheme);
        return false;
    };
    setCustomThemeForm();
    buttonFunctions();
    selectTheme();
};
window.addEventListener('load', extraThemes);
</script>
