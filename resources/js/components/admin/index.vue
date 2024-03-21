<template>
  <div class="bg-black">
    <div class='grid grid-cols-10'>
      <div class='col-span-2 '>
        <div class="card rounded-lg w-[97%] h-[1000px] my-2 shadow-2xl">
          <div class="">
            <div class="w-full flex gap-9 ">
              <div class="ml-[10px]">
                <div class="loader"></div>
                </div>
              <div class="my-auto ">
                <h1 class="font-bold text-xl italic">Admin Pannel</h1>
              </div>
              </div>
            <div class="w-full bg-orange-300">
              logo
            </div>
          </div>
          <div class="w-[90%] container mx-auto bg-white shadow-2xl bg-opacity-5  rounded-lg g content-center ">
          <button class="btn mx-10 my-2 border-red-50 border-b-2 ">
                profile
              <div id="clip">
                  <div id="leftTop" class="corner"></div>
                  <div id="rightBottom" class="corner"></div>
                  <div id="rightTop" class="corner"></div>
                  <div id="leftBottom" class="corner"></div>
              </div>
              <span id="rightArrow" class="arrow"></span>
              <span id="leftArrow" class="arrow"></span>
          </button>
          <button class="btn mx-10 my-2">
              Rented Book
              <div id="clip">
                  <div id="leftTop" class="corner"></div>
                  <div id="rightBottom" class="corner"></div>
                  <div id="rightTop" class="corner"></div>
                  <div id="leftBottom" class="corner"></div>
              </div>
              <span id="rightArrow" class="arrow"></span>
              <span id="leftArrow" class="arrow"></span>
          </button>
          <button class="btn mx-10 my-2">
              Like Book
              <div id="clip">
                  <div id="leftTop" class="corner"></div>
                  <div id="rightBottom" class="corner"></div>
                  <div id="rightTop" class="corner"></div>
                  <div id="leftBottom" class="corner"></div>
              </div>
              <span id="rightArrow" class="arrow"></span>
              <span id="leftArrow" class="arrow"></span>
          </button>
          <button class="btn mx-10 my-2">
              Follower
              <div id="clip">
                  <div id="leftTop" class="corner"></div>
                  <div id="rightBottom" class="corner"></div>
                  <div id="rightTop" class="corner"></div>
                  <div id="leftBottom" class="corner"></div>
              </div>
              <span id="rightArrow" class="arrow"></span>
              <span id="leftArrow" class="arrow"></span>
          </button>
          <button class="btn mx-10 my-2">
              Following
              <div id="clip">
                  <div id="leftTop" class="corner"></div>
                  <div id="rightBottom" class="corner"></div>
                  <div id="rightTop" class="corner"></div>
                  <div id="leftBottom" class="corner"></div>
              </div>
              <span id="rightArrow" class="arrow"></span>
              <span id="leftArrow" class="arrow"></span>
          </button>
                    <button class="btn mx-10 my-2">
              Collection Book
              <div id="clip">
                  <div id="leftTop" class="corner"></div>
                  <div id="rightBottom" class="corner"></div>
                  <div id="rightTop" class="corner"></div>
                  <div id="leftBottom" class="corner"></div>
              </div>
              <span id="rightArrow" class="arrow"></span>
              <span id="leftArrow" class="arrow"></span>
          </button>
          </div>
        </div>
      </div>
      <div class="col-span-8 flex justify-center">
          <div class="rightcard rounded-2xl opacity-10 w-[97%] h-[1000px] my-2 shadow-2xl">

          </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.card {
  border-radius: 30px;
  background: rgb(243, 241, 223);
  box-shadow: rgba(170, 170, 179, 0.25) 0px 30px 50px -12px inset, rgba(14, 13, 13, 0.3) 0px 18px 26px -18px inset;
}
.rightcard {
  background: rgb(245, 240, 240);
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
  
}
.loader {
  width: 48px;
  height: 48px;
  background: #353535;
  /* display: block; */
  /* margin: 4px; */
  position: relative;
  box-sizing: border-box;
  animation: rotationBack 1s ease-in-out infinite reverse;
}

.loader::before {
  content: '';
  box-sizing: border-box;
  left: 0;
  top: 0;
  transform: rotate(45deg);
  position: absolute;
  width: 48px;
  height: 48px;
  background: #2e2e2e;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}

.loader::after {
  content: '';
  box-sizing: border-box;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  position: absolute;
  left: 50%;
  top: 50%;
  background: rgb(0, 0, 0);
  transform: translate(-50%, -50%);
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}

@keyframes rotationBack {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(-360deg);
  }
}
.btn {
  position: relative;
  width: 11em;
  height: 4em;
  outline: none;
  transition: 0.1s;
  background-color: transparent;
  border: none;
  font-size: 13px;
  font-weight: bold;
  color: #ddebf0;
}

#clip {
  --color: #2761c3;
  position: absolute;
  top: 0;
  overflow: hidden;
  width: 100%;
  height: 100%;
  border: 5px double var(--color);
  box-shadow: inset 0px 0px 15px #195480;
  -webkit-clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%);
}

.arrow {
  position: absolute;
  transition: 0.2s;
  background-color: #2761c3;
  top: 35%;
  width: 11%;
  height: 30%;
}

#leftArrow {
  left: -13.5%;
  -webkit-clip-path: polygon(100% 0, 100% 100%, 0 50%);
}

#rightArrow {
  -webkit-clip-path: polygon(100% 49%, 0 0, 0 100%);
  left: 102%;
}

.btn:hover #rightArrow {
  background-color: #27c39f;
  left: -15%;
  animation: 0.6s ease-in-out both infinite alternate rightArrow8;
}

.btn:hover #leftArrow {
  background-color: #27c39f;
  left: 103%;
  animation: 0.6s ease-in-out both infinite alternate leftArrow8;
}

.corner {
  position: absolute;
  width: 4em;
  height: 4em;
  background-color: #2761c3;
  box-shadow: inset 1px 1px 8px #2781c3;
  transform: scale(1) rotate(45deg);
  transition: 0.2s;
}

#rightTop {
  top: -1.98em;
  left: 91%;
}

#leftTop {
  top: -1.96em;
  left: -3.0em;
}

#leftBottom {
  top: 2.10em;
  left: -2.15em;
}

#rightBottom {
  top: 45%;
  left: 88%;
}

button:hover #leftTop {
  animation: 0.1s ease-in-out 0.05s both changeColor8,
  0.2s linear 0.4s both lightEffect8;
}

.btn:hover #rightTop {
  animation: 0.1s ease-in-out 0.15s both changeColor8,
  0.2s linear 0.4s both lightEffect8;
}

.btn:hover #rightBottom {
  animation: 0.1s ease-in-out 0.25s both changeColor8,
  0.2s linear 0.4s both lightEffect8;
}

.btn:hover #leftBottom {
  animation: 0.1s ease-in-out 0.35s both changeColor8,
  0.2s linear 0.4s both lightEffect8;
}

.btn:hover .corner {
  transform: scale(1.25) rotate(45deg);
}

.btn:hover #clip {
  animation: 0.2s ease-in-out 0.55s both greenLight8;
  --color: #27c39f;
}

@keyframes changeColor8 {
  from {
    background-color: #2781c3;
  }

  to {
    background-color: #27c39f;
  }
}

@keyframes lightEffect8 {
  from {
    box-shadow: 1px 1px 5px #27c39f;
  }

  to {
    box-shadow: 0 0 2px #27c39f;
  }
}

@keyframes greenLight8 {
  from {
  }

  to {
    box-shadow: inset 0px 0px 32px #27c39f;
  }
}

@keyframes leftArrow8 {
  from {
    transform: translate(0px);
  }

  to {
    transform: translateX(10px);
  }
}

@keyframes rightArrow8 {
  from {
    transform: translate(0px);
  }

  to {
    transform: translateX(-10px);
  }
}

</style>