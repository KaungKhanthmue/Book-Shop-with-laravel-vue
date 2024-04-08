<template>
  <div class="h-[1500px] w-full bg-green-200">
    <Nav />
    <div class="bg-white shadow-2xl rounded-3xl h-[1400px] container mx-auto mt-8 pt-9">
      <div class="mx-16 bg-black h-[1300px] pl-4 pt-2 ">
        <div class="grid grid-cols-4 ">
        <div class="card my-3" v-for="friend  in friendList" :key="friend.id">
          <div class="card__img px-2 pt-2 ">
            <img
              class="w-full h-[192px]"
              src="data:image/jpeg;base64,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"
              alt
            />
          </div>
          <div class="card__avatar">
            <svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
              <circle cx="64" cy="64" fill="#ff8475" r="60" />
              <circle cx="64" cy="64" fill="#f85565" opacity=".4" r="48" />
              <path
                d="m64 14a32 32 0 0 1 32 32v41a6 6 0 0 1 -6 6h-52a6 6 0 0 1 -6-6v-41a32 32 0 0 1 32-32z"
                fill="#7f3838"
              />
              <path
                d="m62.73 22h2.54a23.73 23.73 0 0 1 23.73 23.73v42.82a4.45 4.45 0 0 1 -4.45 4.45h-41.1a4.45 4.45 0 0 1 -4.45-4.45v-42.82a23.73 23.73 0 0 1 23.73-23.73z"
                fill="#393c54"
                opacity=".4"
              />
              <circle cx="89" cy="65" fill="#fbc0aa" r="7" />
              <path
                d="m64 124a59.67 59.67 0 0 0 34.69-11.06l-3.32-9.3a10 10 0 0 0 -9.37-6.64h-43.95a10 10 0 0 0 -9.42 6.64l-3.32 9.3a59.67 59.67 0 0 0 34.69 11.06z"
                fill="#4bc190"
              />
              <path
                d="m45 110 5.55 2.92-2.55 8.92a60.14 60.14 0 0 0 9 1.74v-27.08l-12.38 10.25a2 2 0 0 0 .38 3.25z"
                fill="#356cb6"
                opacity=".3"
              />
              <path
                d="m71 96.5v27.09a60.14 60.14 0 0 0 9-1.74l-2.54-8.93 5.54-2.92a2 2 0 0 0 .41-3.25z"
                fill="#356cb6"
                opacity=".3"
              />
              <path d="m57 123.68a58.54 58.54 0 0 0 14 0v-25.68h-14z" fill="#fff" />
              <path
                d="m64 88.75v9.75"
                fill="none"
                stroke="#fbc0aa"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="14"
              />
              <circle cx="39" cy="65" fill="#fbc0aa" r="7" />
              <path
                d="m64 91a25 25 0 0 1 -25-25v-16.48a25 25 0 1 1 50 0v16.48a25 25 0 0 1 -25 25z"
                fill="#ffd8c9"
              />
              <path
                d="m91.49 51.12v-4.72c0-14.95-11.71-27.61-26.66-28a27.51 27.51 0 0 0 -28.32 27.42v5.33a2 2 0 0 0 2 2h6.81a8 8 0 0 0 6.5-3.33l4.94-6.88a18.45 18.45 0 0 1 1.37 1.63 22.84 22.84 0 0 0 17.87 8.58h13.45a2 2 0 0 0 2.04-2.03z"
                fill="#bc5b57"
              />
              <path
                d="m62.76 36.94c4.24 8.74 10.71 10.21 16.09 10.21h5"
                style="fill:none;stroke-linecap:round;stroke:#fff;stroke-miterlimit:10;stroke-width:2;opacity:.1"
              />
              <path
                d="m71 35c2.52 5.22 6.39 6.09 9.6 6.09h3"
                style="fill:none;stroke-linecap:round;stroke:#fff;stroke-miterlimit:10;stroke-width:2;opacity:.1"
              />
              <circle cx="76" cy="62.28" fill="#515570" r="3" />
              <circle cx="52" cy="62.28" fill="#515570" r="3" />
              <ellipse cx="50.42" cy="69.67" fill="#f85565" opacity=".1" rx="4.58" ry="2.98" />
              <ellipse cx="77.58" cy="69.67" fill="#f85565" opacity=".1" rx="4.58" ry="2.98" />
              <g fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="m64 67v4" stroke="#fbc0aa" stroke-width="4" />
                <path d="m55 56h-9.25" opacity=".2" stroke="#515570" stroke-width="2" />
                <path d="m82 56h-9.25" opacity=".2" stroke="#515570" stroke-width="2" />
              </g>
              <path d="m64 84c5 0 7-3 7-3h-14s2 3 7 3z" fill="#f85565" opacity=".4" />
              <path
                d="m65.07 78.93-.55.55a.73.73 0 0 1 -1 0l-.55-.55c-1.14-1.14-2.93-.93-4.27.47l-1.7 1.6h14l-1.66-1.6c-1.34-1.4-3.13-1.61-4.27-.47z"
                fill="#f85565"
              />
            </svg>
          </div>
          <div class="card__title">{{friend.name}}</div>
          <div class="card__subtitle"></div>
          <div class="card__wrapper">
            <button class="card__btn">Follow</button>
            <button class="card__btn card__btn-solid">Button</button>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.card {
  --main-color: #000;
  --submain-color: #78858f;
  --bg-color: #fff;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  position: relative;
  width: 250px;
  height: 354px;
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 20px;
  background: var(--bg-color);
}

.card__img {
  height: 172px;
  width: 100%;
}

.card__img svg {
  height: 100%;
  border-radius: 20px 20px 0 0;
}

.card__avatar {
  position: absolute;
  width: 114px;
  height: 114px;
  background: var(--bg-color);
  border-radius: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  top: calc(50% - 57px);
}

.card__avatar svg {
  width: 100px;
  height: 100px;
}

.card__title {
  margin-top: 60px;
  font-weight: 500;
  font-size: 18px;
  color: var(--main-color);
}

.card__subtitle {
  margin-top: 10px;
  font-weight: 400;
  font-size: 15px;
  color: var(--submain-color);
}

.card__btn {
  margin-top: 15px;
  width: 76px;
  height: 31px;
  border: 2px solid var(--main-color);
  border-radius: 4px;
  font-weight: 700;
  font-size: 11px;
  color: var(--main-color);
  background: var(--bg-color);
  text-transform: uppercase;
  transition: all 0.3s;
}

.card__btn-solid {
  background: var(--main-color);
  color: var(--bg-color);
}

.card__btn:hover {
  background: var(--main-color);
  color: var(--bg-color);
}

.card__btn-solid:hover {
  background: var(--bg-color);
  color: var(--main-color);
}
</style>
<script setup>
import Nav from "@/components/layout/nav.vue";
import {onMounted,ref} from "vue";
import axios from "axios";

const friendList = ref([]);
const fetchFriendList = async() => 
{
  const $response = await axios.get("/api/friendall");
  console.log($response.data);
  friendList.value = $response.data;
};
onMounted(fetchFriendList);

</script>