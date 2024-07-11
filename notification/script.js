"strict mode";

const unreadMessages = document.querySelectorAll(".unread");
const unreadMessagesCount = document.getElementById("num-of-notif");
const markAll = document.getElementById("mark-as-read");

unreadMessagesCount.innerText = unreadMessages.length;

unreadMessages.forEach((message) => {
  message.addEventListener("click", () => {
    message.classList.remove("unread");
    const newUnreadMessages = document.querySelectorAll(".unread");
    unreadMessagesCount.innerText = newUnreadMessages.length;
  });
});
