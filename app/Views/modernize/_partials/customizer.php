<button
      class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasExample"
      aria-controls="offcanvasExample"
    >
      <i
        class="ti ti-settings fs-7"
        data-bs-toggle="tooltip"
        data-bs-placement="top"
        data-bs-title="Settings"
      ></i>
    </button>
    <div
      class="offcanvas offcanvas-end customizer"
      tabindex="-1"
      id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel"
      data-simplebar=""
    >
      <div
        class="d-flex align-items-center justify-content-between p-3 border-bottom"
      >
        <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
          Settings
        </h4>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body p-4">
        <div class="theme-option pb-4">
          <h6 class="fw-semibold fs-4 mb-1">Theme Option</h6>
          <div class="d-flex align-items-center gap-3 my-3">
            <a
              href="javascript:void(0)"
              onclick="toggleTheme('<?php echo base_url('modernize-bootstrap'); ?>/dist/css/style.min.css')"
              class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark"
            >
              <i class="ti ti-brightness-up fs-7 text-primary"></i>
              <span class="text-dark">Light</span>
            </a>
            <a
              href="javascript:void(0)"
              onclick="toggleTheme('<?php echo base_url('modernize-bootstrap'); ?>/dist/css/style-dark.min.css')"
              class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark"
            >
              <i class="ti ti-moon fs-7"></i>
              <span class="text-dark">Dark</span>
            </a>
          </div>
        </div>
        <div class="theme-colors pb-4">
          <h6 class="fw-semibold fs-4 mb-1">Theme Colors (Light Mode Only)</h6>
          <div class="d-flex align-items-center gap-3 my-3">
            <ul class="list-unstyled mb-0 d-flex gap-3 flex-wrap change-colors">
              <li
                class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center"
              >
                <a
                  href="javascript:void(0)"
                  class="rounded-circle position-relative d-block customizer-bgcolor skin1-bluetheme-primary active-theme"
                  onclick="toggleTheme('<?php echo base_url('modernize-bootstrap'); ?>/dist/css/style.min.css')"
                  data-color="blue_theme"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  data-bs-title="BLUE_THEME"
                  ><i
                    class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"
                  ></i
                ></a>
              </li>
              <li
                class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center"
              >
                <a
                  href="javascript:void(0)"
                  class="rounded-circle position-relative d-block customizer-bgcolor skin2-aquatheme-primary"
                  onclick="toggleTheme('<?php echo base_url('modernize-bootstrap'); ?>/dist/css/style-aqua.min.css')"
                  data-color="aqua_theme"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  data-bs-title="AQUA_THEME"
                  ><i
                    class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"
                  ></i
                ></a>
              </li>
              <li
                class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center"
              >
                <a
                  href="javascript:void(0)"
                  class="rounded-circle position-relative d-block customizer-bgcolor skin3-purpletheme-primary"
                  onclick="toggleTheme('<?php echo base_url('modernize-bootstrap'); ?>/dist/css/style-purple.min.css')"
                  data-color="purple_theme"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  data-bs-title="PURPLE_THEME"
                  ><i
                    class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"
                  ></i
                ></a>
              </li>
              <li
                class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center"
              >
                <a
                  href="javascript:void(0)"
                  class="rounded-circle position-relative d-block customizer-bgcolor skin4-greentheme-primary"
                  onclick="toggleTheme('<?php echo base_url('modernize-bootstrap'); ?>/dist/css/style-green.min.css')"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  data-bs-title="GREEN_THEME"
                  ><i
                    class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"
                  ></i
                ></a>
              </li>
              <li
                class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center"
              >
                <a
                  href="javascript:void(0)"
                  class="rounded-circle position-relative d-block customizer-bgcolor skin5-cyantheme-primary"
                  onclick="toggleTheme('<?php echo base_url('modernize-bootstrap'); ?>/dist/css/style-cyan.min.css')"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  data-bs-title="CYAN_THEME"
                  ><i
                    class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"
                  ></i
                ></a>
              </li>
              <li
                class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center"
              >
                <a
                  href="javascript:void(0)"
                  class="rounded-circle position-relative d-block customizer-bgcolor skin6-orangetheme-primary"
                  onclick="toggleTheme('<?php echo base_url('modernize-bootstrap'); ?>/dist/css/style-orange.min.css')"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  data-bs-title="ORANGE_THEME"
                  ><i
                    class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"
                  ></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="card-with pb-4">
          <h6 class="fw-semibold fs-4 mb-1">Card With</h6>
          <div class="d-flex align-items-center gap-3 my-3">
            <a
              href="javascript:void(0)"
              class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 text-dark cardborder"
            >
              <i class="ti ti-border-outer fs-7"></i>
              <span class="text-dark">Border</span>
            </a>
            <a
              href="javascript:void(0)"
              class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 cardshadow"
            >
              <i class="ti ti-border-none fs-7"></i>
              <span class="text-dark">Shadow</span>
            </a>
          </div>
        </div>
      </div>
    </div>