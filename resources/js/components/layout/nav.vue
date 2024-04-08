<template>
  <div class="">
    <div class="container h-[90px] w-[900px]">
      <div class="nav-bar">
        <ul>
          <li class="active">
            <div @click="book">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
            </svg>
              <span>Books</span>
            </div>
          </li>
          <li>
            <div @click="friend">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
           </svg>
              <span>Add Friend</span>
            </div>
          </li>
          <li>
            <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
            </svg>
              <span>Notification</span>
            </div>
          </li>
          <li>
            <div @click="frontprofile">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
              <span>Your Profile</span>
            </div>
          </li>
        </ul>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
          <filter id="old-goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
            <feColorMatrix
              in="blur"
              mode="matrix"
              values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
              result="goo"
            />
            <feBlend in="SourceGraphic" in2="goo" />
          </filter>
          <filter id="fancy-goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
            <feColorMatrix
              in="blur"
              mode="matrix"
              values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
              result="goo"
            />
            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
          </filter>
        </defs>
      </svg>
    </div>
  </div>
</template>
<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
}

.container {

  margin: 0 auto;
  /* background: linear-gradient(to top right, #f01d39, #fa2d6e); */
  border-radius: 0 0 50px 50px;
  overflow: hidden;
  position: relative;
  box-shadow: 0 20px 35px 0 rgba(240, 29, 57, 0.5);
}

.nav-bar {
  background: #fff;
  width: 100%;
  /* height: 6rem; */
  position: absolute;
  left: 0;
  bottom: 0;
  /* filter: url("#fancy-goo"); */
}

.nav-bar svg {
  height: 3rem;
  margin-bottom: 4px;
  position: relative;
  z-index: 10;
  transition: all 0.4s;
  display: inline-block;
}

.nav-bar ul {
  display: flex;
  height: 100%;
}

.nav-bar ul li {
  height: 100%;
  text-align: center;
  list-style: none;
  align-items: center;
  display: flex;
  cursor: pointer;
  justify-content: center;
  flex-wrap: wrap;
  position: relative;
  flex: 1;
}

.nav-bar ul li span {
  font-weight: 600;
  width: 100%;
  display: block;
  text-align: center;
  transition: all 0.22s;
}

.nav-bar ul li:after {
  width: 50%;
  height: 50%;
  border-radius: 100%;
  content: "";
  left: 0;
  right: 0;
  margin: 0 auto;
  top: 0;
  z-index: 0;
  position: absolute;
  background: #fff;
  transition: all 0.4s;
}

.nav-bar ul li:hover:after {
  transform: translate3d(0, -15%, 0);
}

.nav-bar ul li.active:after {
  transform: translate3d(0, -40%, 0);
}

.nav-bar ul li.active span,
.nav-bar ul li:hover span {
  color: #f01d39;
}

.nav-bar ul li.active svg {
  transform: scale(1.12) translate3d(0, -10px, 0);
}

.nav-bar ul li:not(.active):hover svg {
  transform: scale(1.049) translate3d(0, -4px, 0);
}

.nav-bar ul li svg path {
  transition: all 0.4s;
}

.nav-bar ul li:hover svg path,
.nav-bar ul li.active svg path {
  fill: #f01d39;
}

@media screen and (max-width: 400px) {
  .nav-bar svg {
    height: 1.5rem;
  }

  .nav-bar ul li span {
    font-size: 0.75rem;
    font-weight: 500;
  }

  .nav-bar ul li.active:after {
    transform: translate3d(0, -25%, 0);
  }
}
</style>
<script setup>
import {ref} from 'vue';
import { useRouter } from 'vue-router';
const router = useRouter();
const isFriendActive = ref(false);
const book = () => {
  router.push('/');
};
const friend = () => {
  router.push('/friendlist');
};
const frontprofile = ()=>{
  router.push('/frontprofile')
}
let menuItems = document.querySelectorAll(".nav-bar ul li");

const navItemClick = function(el) {
  let element = this;

  menuItems.forEach(item => {
    item.classList.remove("active");
  });

  element.classList.add("active");
};

menuItems.forEach(item => {
  item.addEventListener("click", navItemClick);
});
</script>