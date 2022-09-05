# Lando WP
Run WordPress locally

Configuration is in `.lando.yml` file

Helpful Docs: https://docs.lando.dev/wordpress/

---

Build or start up Lando

`lando start`

Local URL: https://localwp.lndo.site/

---

Import database

`lando db-import <file>`

---

Clear WordPress cache

`lando cc`

---

SSH into appserver container

`lando ssh`

---

Rebuild Lando containers (retains DB)

`lando rebuild -y`

---

Destroy Lando containers

`lando destroy`

---

## Sample database info
user: admin
pass: password
