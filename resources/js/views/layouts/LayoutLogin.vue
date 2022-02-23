<template>
  <div class="login-page login-1">
    <div class="login-wrapper">
      <div class="login-box">
        <div class="logo-main">
          <a href="/admin">
            <img src="/assets/img/logo-large.png" alt="Laraspace Logo">
          </a>
        </div>
        <router-view/>
        <div class="page-copyright">
          <p>Powered by
            <a href="http://cuberto.com" target="_blank">Cuberto</a>
          </p>
          <p>Laraspace © 2022</p>
        </div>
      </div>
    </div>
  </div>
</template>
