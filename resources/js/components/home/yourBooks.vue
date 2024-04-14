<template>
  <div class="gird grid-rwos-2">
    <div>
      <frontProfile />
    </div>
    <div class="bg-green-200 w-full h-[600px] mt-[250px] flex justify-center">
      <div class="container mx-auto my-auto bg-black h-[500px]">
      <div class="mx-[100px]">
        <div class="grid grid-cols-4 gap-7">
          <div
            v-for="book in yourbooks"
            :key="book.id"
            class="border-black border bg-white rounded-3xl border-4"
          >
              <div class="flex justify-center">
                <div class="card">
                  <div class="container-image overflow-hidden">
                    <img
                      class="w-full h-[180px] mt-[5px]"
                      src="https://getwallpapers.com/wallpaper/full/2/c/a/165944.jpg"
                      alt
                    />
                  </div>
                  <div class="content">
                    <div class="detail">
                      <span>
                        Lorem
                        <br />Ipsum dolor.
                      </span>
                      <p>$199</p>
                      <button>Buy</button>
                    </div>
                    <div class="product-image">
                      <div class="box-image">
                        <svg
                          class="img-product"
                          xmlns="http://www.w3.org/2000/svg"
                          xml:space="preserve"
                          version="1.1"
                          style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                          viewBox="0 0 116.83 182.61"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                        >
                          <defs />
                          <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer" />
                            <path
                              class="fil-shoes2"
                              d="M99.33 20.55c-4.24,-1.91 -3.3,-0.4 -8.3,-3.82 -4.06,-2.78 -12.82,-7.22 -17.68,-9.3 -0.94,-0.4 -2.53,-1.19 -4.13,-1.73l-6.69 -1.8c-0.99,-0.23 -1.3,-0.65 -2.22,-0.84 -2.53,-0.53 -3.82,-0.46 -6.69,-1.8 -1.49,-0.7 -2.01,-1.69 -3.83,-1.04 -0.87,0.31 -1.19,0.64 -1.58,1.41 -2.44,4.98 -7.2,7.7 -11.26,11.02l-2.61 1.83c-3.93,2.6 -9.38,4.53 -13.7,6.73 -2.89,1.47 -0.86,0.97 -4.02,0.7 -3.13,-0.27 -6.21,3.31 -8.33,5.29 -1.04,0.97 -0.92,0.53 -1.85,1.4 -0.47,0.44 -1.08,1.33 -1.33,1.49 -1.07,0.68 -4.09,2.28 -4.75,3.1 -1.3,1.63 1.31,5.1 2.23,7.24 0.64,1.49 1.76,3.02 3.13,4.07 0.74,0.56 1.15,1.74 1.7,2.61 -4.07,2.78 -3.12,3.46 -2.09,4.55 2.17,2.3 3.66,4.97 5.89,7.28 4.1,4.26 1.12,4.68 2.64,8.38 0.55,1.33 0.85,1.09 0.9,2.64 0.11,3.4 -2.12,4.67 -1.04,9.36 1.66,7.23 0.4,2.11 0.06,5.96 -0.07,0.84 0.09,2.01 0.28,2.8 0.37,1.51 0.52,1.49 1.31,2.75 -3.14,5.43 0.18,6.41 -0.44,8.98 -0.6,2.51 -0.95,3.64 -0.11,6.01 0.32,0.9 1.2,2.1 1.3,2.75 0.18,1.1 -0.42,1.33 -0.22,2.94 0.25,2.12 -0.18,4.23 0.11,5.95 0.29,1.75 0.42,0.99 0.2,3.05 -0.34,3.15 -1.45,5.88 -0.63,9.03 0.31,1.2 -2.36,8.82 -2.7,10.03 -1.79,6.36 -5.05,13.1 -6.2,19.61 -0.61,3.43 -2.34,1.66 -1.11,6.28 0.92,3.47 4.04,4.61 5.91,7.28 0.79,1.12 0.41,1.28 1.7,2.65l2.35 2.25c1.77,1.48 2.49,2.9 5.16,4.13l2.42 0.76c2.87,0.45 5.92,-1.16 8.06,-2.98l5.48 -5.18c2.01,-2 3.71,-4.85 5.66,-6.98 2.12,-2.32 9.8,-15.54 11.11,-18.32 0.6,-1.26 1.15,-1.61 1.93,-2.45 1.29,-1.38 0.99,-2.19 1.76,-3.35 0.69,-1.05 1.38,-1.26 2.33,-2.87 2.62,-4.45 24.66,-42 26.3,-45.85 0.9,-2.11 3.13,-4.62 4.12,-6.85 2.49,-5.61 5.17,-12.08 8.85,-17.34 2.18,-3.12 8.43,-13.52 8.19,-15.8 0.86,-0.42 7.8,-14 8.75,-15.88 2.13,-4.22 1.53,-9.85 -2.88,-12.09 -4.39,-2.47 -8.77,-3.95 -13.43,-6.05z"
                            />
                          </g>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex justify-center">
                <button class="btn" type="button">
                  <strong>{{book.title}}</strong>
                  <div id="container-stars">
                    <div id="stars"></div>
                  </div>

                  <div id="glow">
                    <div class="circle"></div>
                    <div class="circle"></div>
                  </div>
                </button>
              </div>
              <div class="flex justify-between p-2">
                <button class="bt px-2">
                  <svg
                    class="empty"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    width="32"
                    height="32"
                  >
                    <path fill="none" d="M0 0H24V24H0z" />
                    <path
                      d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2zm-3.566 15.604c.881-.556 1.676-1.109 2.42-1.701C18.335 14.533 20 11.943 20 9c0-2.36-1.537-4-3.5-4-1.076 0-2.24.57-3.086 1.414L12 7.828l-1.414-1.414C9.74 5.57 8.576 5 7.5 5 5.56 5 4 6.656 4 9c0 2.944 1.666 5.533 4.645 7.903.745.592 1.54 1.145 2.421 1.7.299.189.595.37.934.572.339-.202.635-.383.934-.571z"
                    />
                  </svg>
                  <svg
                    class="filled"
                    height="32"
                    width="32"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path d="M0 0H24V24H0z" fill="none" />
                    <path
                      d="M16.5 3C19.538 3 22 5.5 22 9c0 7-7.5 11-10 12.5C9.5 20 2 16 2 9c0-3.5 2.5-6 5.5-6C9.36 3 11 4 12 5c1-1 2.64-2 4.5-2z"
                    />
                  </svg>
                  100
                </button>
                <button class="flex bg-gray-300 pt-2 pl-2 rounded-3xl w-[80px] shadow-2xl">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-6 h-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                    />
                  </svg>
                  <div class="ml-2">100</div>
                </button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</template>
<style scoped>
.bt {
  display: flex;
  justify-content: center;
  align-items: center;
  /* padding: 20px 25px 20px 22px; */
  box-shadow: rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  background-color: #e8e8e8;
  border-color: #ffe2e2;
  border-style: solid;
  border-radius: 35px;
  font-size: 25px;
  font-weight: 900;
  color: rgb(134, 124, 124);
  font-family: monospace;
  transition: transform 400ms cubic-bezier(0.68, -0.55, 0.27, 2.5),
    border-color 400ms ease-in-out, background-color 400ms ease-in-out;
  word-spacing: -2px;
}

@keyframes movingBorders {
  0% {
    border-color: #fce4e4;
  }

  50% {
    border-color: #ffd8d8;
  }

  90% {
    border-color: #fce4e4;
  }
}

.bt:hover {
  background-color: #eee;
  transform: scale(105%);
  animation: movingBorders 3s infinite;
}

.bt svg {
  margin-right: 11px;
  fill: rgb(255, 110, 110);
  transition: opacity 100ms ease-in-out;
}

.filled {
  position: absolute;
  opacity: 0;
  top: 2px;
  left: 10px;
}

@keyframes beatingHeart {
  0% {
    transform: scale(1);
  }

  15% {
    transform: scale(1.15);
  }

  30% {
    transform: scale(1);
  }

  45% {
    transform: scale(1.15);
  }

  60% {
    transform: scale(1);
  }
}

.bt:hover .empty {
  opacity: 0;
}

.bt:hover .filled {
  opacity: 1;
  animation: beatingHeart 1.2s infinite;
}
.input-container {
  display: flex;
  background: white;
  border-radius: 1rem;
  background: linear-gradient(135deg, #23272f 0%, #14161a 100%);
  box-shadow: 10px 10px 20px #0e1013, -10px -10px 40px #383e4b;
  padding: 0.3rem;
  gap: 0.3rem;
}

.input-container input {
  border-radius: 0.8rem 0 0 0.8rem;
  background: #23272f;
  box-shadow: inset 5px 5px 10px #0e1013, inset -5px -5px 10px #383e4b,
    0px 0px 100px rgba(255, 212, 59, 0), 0px 0px 100px rgba(255, 102, 0, 0);
  width: 100%;
  flex-basis: 75%;
  padding: 1rem;
  border: none;
  border: 1px solid transparent;
  color: white;
  transition: all 0.2s ease-in-out;
}

.input-container input:focus {
  border: 1px solid #ffd43b;
  outline: none;
  box-shadow: inset 0px 0px 10px rgba(255, 102, 0, 0.5),
    inset 0px 0px 10px rgba(255, 212, 59, 0.5),
    0px 0px 100px rgba(255, 212, 59, 0.5), 0px 0px 100px rgba(255, 102, 0, 0.5);
}

.input-container button {
  flex-basis: 25%;
  background: linear-gradient(
    135deg,
    rgb(255, 212, 59) 0%,
    rgb(255, 102, 0) 100%
  );
  box-shadow: 0px 0px 1px rgba(255, 212, 59, 0.5),
    0px 0px 1px rgba(255, 102, 0, 0.5);
  font-weight: 500;
  letter-spacing: 0.1rem;
  text-transform: uppercase;
  color: #23272f;
  border: none;
  width: 100%;
  border-radius: 0 1rem 1rem 0;
  transition: all 0.2s ease-in-out;
}

.input-container button:hover {
  background: linear-gradient(
    135deg,
    rgb(255, 212, 59) 50%,
    rgb(255, 102, 0) 100%
  );
  box-shadow: 0px 0px 100px rgba(255, 212, 59, 0.5),
    0px 0px 100px rgba(255, 102, 0, 0.5);
}

@media (max-width: 500px) {
  .input-container {
    flex-direction: column;
  }

  .input-container input {
    border-radius: 0.8rem;
  }

  .input-container button {
    border-radius: 0.8rem;
  }
}
.btn {
  margin: 12px;
  height: 50px;
  width: 120px;
  border-radius: 10px;
  background: #333;
  justify-content: center;
  align-items: center;
  box-shadow: -5px -5px 15px #444, 5px 5px 15px #222, inset 5px 5px 10px #444,
    inset -5px -5px 10px #222;
  font-family: "Damion", cursive;
  cursor: pointer;
  border: none;
  font-size: 16px;
  color: rgb(161, 161, 161);
  transition: 500ms;
}

.btn:hover {
  box-shadow: -5px -5px 15px #444, 5px 5px 15px #222, inset 5px 5px 10px #222,
    inset -5px -5px 10px #444;
  color: #d6d6d6;
  transition: 500ms;
}

.card {
  position: relative;
  background: transparent;
  width: 300px;
  height: 300px;
  border: none;
}

.card:hover {
  width: 300px;
}

.card .container-image {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #e7e7e7;
  width: 190px;
  height: 190px;
  cursor: pointer;
  border: none;
  border-radius: 50%;
  box-shadow: 0 0 3px 1px #1818183d, 2px 2px 3px #18181865,
    inset 2px 2px 2px #ffffff;
  transition: all 0.3s ease-in-out, opacity 0.3s;
  transition-delay: 0.6s, 0s;
}

.card:hover .container-image {
  opacity: 0;
  border-radius: 8px;
  transition-delay: 0s, 0.6s;
}

.card .container-image .image-circle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 125px;
  height: auto;
  object-fit: contain;
  filter: drop-shadow(2px 2px 2px #1818188a);
  transition: all 0.3s ease-in-out;
  transition-delay: 0.4s;
}

.card:hover .container-image .image-circle {
  opacity: 0;
  transition-delay: 0s;
}

.card .content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #e7e7e7;
  padding: 20px;
  width: 190px;
  height: 190px;
  cursor: pointer;
  border: none;
  border-radius: 8px;
  box-shadow: 0 0 3px 1px #1818183d, 2px 2px 3px #18181865,
    inset 2px 2px 2px #ffffff;
  visibility: hidden;
  transition: 0.3s ease-in-out;
  transition-delay: 0s;
  z-index: 1;
}

.card:hover .content {
  width: 200px;
  height: 190px;
  visibility: visible;
  transition-delay: 0.5s;
}

.card .content .detail {
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 100%;
  opacity: 0;
  transition: all 0.3s ease-in-out;
  transition-delay: 0s;
}

.card:hover .content .detail {
  color: #181818;
  opacity: 100%;
  transition: 1s;
  transition-delay: 0.3s;
}

.card .content .detail span {
  margin-bottom: 5px;
  font-size: 18px;
  font-weight: 800;
}

.card .content .detail button {
  background: #b8854b;
  margin-top: auto;
  width: 75px;
  height: 25px;
  color: #ffffff;
  font-size: 13px;
  border: none;
  border-radius: 8px;
  transition: 0.3s ease-in-out;
}

.card .content .detail button:hover {
  background: #d39f63;
}

.card .content .product-image {
  position: relative;
  width: 100%;
  height: 100%;
}

.card .content .product-image .box-image {
  display: flex;
  position: absolute;
  top: 0;
  left: -25%;
  width: 100%;
  height: 115%;
  opacity: 0;
  transform: scale(0.5);
  transition: all 0.5s ease-in-out;
  transition-delay: 0s;
}

.card:hover .content .product-image .box-image {
  top: -25%;
  left: 0;
  opacity: 100%;
  transform: scale(1);
  transition-delay: 0.3s;
}

.card .content .product-image .box-image .img-product {
  margin: auto;
  width: 7rem;
  height: auto;
}

.fil-shoes1,
.fil-shoes2 {
  fill: #333333;
}

.btn {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 13rem;
  overflow: hidden;
  height: 3rem;
  background-size: 300% 300%;
  backdrop-filter: blur(1rem);
  border-radius: 5rem;
  transition: 0.5s;
  animation: gradient_301 5s ease infinite;
  border: double 4px transparent;
  background-image: linear-gradient(#212121, #212121),
    linear-gradient(
      137.48deg,
      #ffdb3b 10%,
      #fe53bb 45%,
      #8f51ea 67%,
      #0044ff 87%
    );
  background-origin: border-box;
  background-clip: content-box, border-box;
}

#container-stars {
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  overflow: hidden;
  transition: 0.5s;
  backdrop-filter: blur(1rem);
  border-radius: 5rem;
}

strong {
  z-index: 2;
  font-family: "Avalors Personal Use";
  font-size: 12px;
  letter-spacing: 5px;
  color: #ffffff;
  text-shadow: 0 0 4px white;
}

#glow {
  position: absolute;
  display: flex;
  width: 12rem;
}

.circle {
  width: 100%;
  height: 30px;
  filter: blur(2rem);
  animation: pulse_3011 4s infinite;
  z-index: -1;
}

.circle:nth-of-type(1) {
  background: rgba(254, 83, 186, 0.636);
}

.circle:nth-of-type(2) {
  background: rgba(142, 81, 234, 0.704);
}

.btn:hover #container-stars {
  z-index: 1;
  background-color: #212121;
}

.btn:hover {
  transform: scale(1.1);
}

.btn:active {
  border: double 4px #fe53bb;
  background-origin: border-box;
  background-clip: content-box, border-box;
  animation: none;
}

.btn:active .circle {
  background: #fe53bb;
}

#stars {
  position: relative;
  background: transparent;
  width: 200rem;
  height: 200rem;
}

#stars::after {
  content: "";
  position: absolute;
  top: -10rem;
  left: -100rem;
  width: 100%;
  height: 100%;
  animation: animStarRotate 90s linear infinite;
}

#stars::after {
  background-image: radial-gradient(#ffffff 1px, transparent 1%);
  background-size: 50px 50px;
}

#stars::before {
  content: "";
  position: absolute;
  top: 0;
  left: -50%;
  width: 170%;
  height: 500%;
  animation: animStar 60s linear infinite;
}

#stars::before {
  background-image: radial-gradient(#ffffff 1px, transparent 1%);
  background-size: 50px 50px;
  opacity: 0.5;
}

@keyframes animStar {
  from {
    transform: translateY(0);
  }

  to {
    transform: translateY(-135rem);
  }
}

@keyframes animStarRotate {
  from {
    transform: rotate(360deg);
  }

  to {
    transform: rotate(0);
  }
}

@keyframes gradient_301 {
  0% {
    background-position: 0% 50%;
  }

  50% {
    background-position: 100% 50%;
  }

  100% {
    background-position: 0% 50%;
  }
}

@keyframes pulse_3011 {
  0% {
    transform: scale(0.75);
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.7);
  }

  70% {
    transform: scale(1);
    box-shadow: 0 0 0 10px rgba(0, 0, 0, 0);
  }

  100% {
    transform: scale(0.75);
    box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
  }
}
</style>
<script setup>
import frontProfile from "@/components/home/frontProfile.vue";
import { onMounted, ref } from "vue";
import axios from "axios";

const yourbooks = ref([]);
const yourbooksList = async () => {
  try {
    const response = await axios.get("/api/books/index");
    console.log(response.data.data);
    yourbooks.value = response.data.data;
  } catch (error) {
    console.error("Error fetching user list:", error);
  }
};
onMounted(yourbooksList);
</script>