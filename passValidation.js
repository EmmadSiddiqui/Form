function onChange() {
    const password = document.querySelector('input[name=password]');
    const conpassword = document.querySelector('input[name=conpassword]');
    if (conpassword.value === password.value) {
      conpassword.setCustomValidity('');
    } else {
      conpassword.setCustomValidity('Passwords do not match');
    }
  }