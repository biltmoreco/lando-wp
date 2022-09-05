# Lando WP

* Run WordPress locally
* Configuration is in `.lando.yml` file
* Helpful Docs: https://docs.lando.dev/wordpress/

---

Build project / start up Lando

`lando start`

After starting, local URL: https://localwp.lndo.site/

---

Import database

`lando db-import <file>`

Note: Perform from root directory of project with database file in root directory

---

Clear WordPress cache (custom tooling command)

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
`user: admin`
`pass: password`
