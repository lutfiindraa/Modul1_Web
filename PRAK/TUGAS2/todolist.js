document.addEventListener("DOMContentLoaded", () => {
  const addButton = document.getElementById("add-btn");
  const taskInput = document.getElementById("new-task");
  const taskList = document.getElementById("task-list");

  // Function to create a new task element
  function createTaskElement(taskText) {
    const li = document.createElement("li");

    const input = document.createElement("input");
    input.type = "text";
    input.value = taskText;
    input.setAttribute("readonly", true);
    input.classList.add("task-text");

    const deleteBtn = document.createElement("button");
    deleteBtn.textContent = "DONE";
    deleteBtn.classList.add("delete-btn");

    li.appendChild(input);
    li.appendChild(deleteBtn);

    // Edit task on click
    input.addEventListener("click", () => {
      input.removeAttribute("readonly");
      input.focus();
    });

    // Save the task when input loses focus
    input.addEventListener("blur", () => {
      input.setAttribute("readonly", true);
    });

    // Delete task on button click
    deleteBtn.addEventListener("click", () => {
      taskList.removeChild(li);
    });

    return li;
  }

  // Add new task
  addButton.addEventListener("click", () => {
    const taskText = taskInput.value.trim();
    if (taskText) {
      const taskElement = createTaskElement(taskText);
      taskList.appendChild(taskElement);
      taskInput.value = "";
    }
  });

  // Enable adding tasks by pressing "Enter"
  taskInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") {
      addButton.click();
    }
  });
});
