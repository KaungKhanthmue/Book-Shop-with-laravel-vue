<template>
  <div class="h-[1000px] w-full bg-green-200">
    <Nav />
    <div class="container mx-auto mx-auto mt-9 bg-red-500 rounded-3xl pb-9">
      <div class="mx-[100px]">
        <div class="grid grid-cols-4 gap-7">
          <div v-for="book in booklist" :key="book.id" class="border-red-900 border-double bg-white rounded-3xl border-8">
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
            <div class="flex justify-center pb-9">
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
          </div>
        </div>
      </div>
    </div>
    <!-- <router-link to="/login">Login</router-link> -->
  </div>
</template>

<script setup>
import Nav from "@/components/layout/nav.vue";
import { onMounted, ref } from "vue";
import axios from "axios";

const booklist = ref([]);
const fetchUserList = async () => {
  try {
    const response = await axios.get("/api/book/index");
    console.log(response);
    booklist.value = response.data;
  } catch (error) {
    ``;
    console.error("Error fetching user list:", error);
  }
};
onMounted(fetchUserList);
</script>

<style >

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