/**
 * Displays a responsive, auto-dismissing toast notification.
 * Mobile: Top Center | Desktop: Top Right
 *
 * @param {string} type - 'success', 'error', 'warning', or 'info'
 * @param {string} message - The text message to display
 */
function showToast(type, message) {
  // 1. Ensure container exists in DOM with responsive positioning classes
  let $container = $("#toast_container");
  if ($container.length === 0) {
    $("body").append(`
            <div id="toast_container" 
                 class="fixed top-4 z-50 flex flex-col space-y-3 w-full px-4 pointer-events-none 
                        left-1/2 -translate-x-1/2 items-center 
                        sm:left-auto sm:right-4 sm:translate-x-0 sm:items-end sm:max-w-sm">
            </div>
        `);
    $container = $("#toast_container");
  }

  let config = {
    bg: "bg-emerald-100 border border-emerald-500",
    icon: `<svg class="w-5 h-5 text- shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>`,
  };

  switch (type.toLowerCase()) {
    case "error":
      config.bg = "bg-red-100 border border-red-500";
      config.icon = `<svg class="w-5 h-5 text- shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>`;
      break;

    case "warning":
      config.bg = "bg-amber-100 border border-amber-500";
      config.icon = `<svg class="w-5 h-5 text- shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>`;
      break;

    case "info":
      config.bg = "bg-blue-100 border border-blue-500";
      config.icon = `<svg class="w-5 h-5 text- shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>`;
      break;

    case "success":
    default:
      config.bg = "bg-emerald-100 border border-emerald-500";
      config.icon = `<svg class="w-5 h-5 text- shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>`;
      break;
  }

  // 3. Construct Toast HTML Element
  const toastId = "toast_" + Date.now();
  const toastHtml = `
        <div id="${toastId}" 
             class="pointer-events-auto flex items-center w-full max-w-sm p-4 rounded-xl shadow-lg ${config.bg} text- 
                    transform transition-all duration-300 -translate-y-10 opacity-0 sm:translate-y-0 sm:translate-x-10">
            <div class="mr-3">
                ${config.icon}
            </div>
            <div class="text-sm font-medium pr-2 leading-tight flex-1">
                ${message}
            </div>
            <button onclick="dismissToast('#${toastId}')" class="ml-auto text-/80 hover:text- focus:outline-none p-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    `;

  // 4. Append to container and animate in
  const $toast = $(toastHtml);
  $container.append($toast);

  setTimeout(() => {
    $toast
      .removeClass("-translate-y-10 sm:translate-x-10 opacity-0")
      .addClass("translate-y-0 sm:translate-x-0 opacity-100");
  }, 10);

  // 5. Auto-remove after 3 seconds (3000ms)
  setTimeout(() => {
    dismissToast(`#${toastId}`);
  }, 3000);
}

/**
 * Helper function to handle smooth dismissal animation
 */
function dismissToast(toastSelector) {
  const $toast = $(toastSelector);
  if ($toast.length > 0) {
    $toast
      .removeClass("translate-y-0 sm:translate-x-0 opacity-100")
      .addClass("-translate-y-10 sm:translate-x-10 opacity-0");
    setTimeout(() => {
      $toast.remove();
    }, 300);
  }
}
