(function () {
    var WelcomeKitEmbed,
        texts,
        bind = function (fn, me) {
            return function () {
                return fn.apply(me, arguments);
            };
        };

    texts = {
        noJobs: {
            fr: "DÃ©solÃ©, nous n'avons pas d'offres en ce moment.",
            en: "Sorry, no job opening available at this time.",
        },
        startDate: {
            fr: "Date de dÃ©but :",
            en: "Start Date:",
        },
    };

    window.welcomeKitReady = function (fn) {
        if (document.readyState !== "loading") {
            return fn();
        } else {
            return document.addEventListener("DOMContentLoaded", fn);
        }
    };

    WelcomeKitEmbed = (function () {
        function WelcomeKitEmbed(reference, classPrefix) {
            if (classPrefix == null) {
                classPrefix = "welcomekit-";
            }
            this.renderOffices = bind(this.renderOffices, this);
            this.renderDepartments = bind(this.renderDepartments, this);
            this.renderWidget = bind(this.renderWidget, this);
            this.render = bind(this.render, this);
            this.classPrefix = classPrefix;
            this.reference = reference;
            this.data = null;
            this.options = {
                apiHost: "https://www.welcomekit.co",
                group: "job",
                locale: "fr",
                display: [],
                website: null,
            };
            this.offices = [];
            this.departments = [];
        }

        WelcomeKitEmbed.prototype.apiHost = function (apiHost) {
            return (this.options.apiHost = apiHost);
        };

        WelcomeKitEmbed.prototype.group = function (group) {
            return (this.options.group = group);
        };

        WelcomeKitEmbed.prototype.display = function (display) {
            return (this.options.display = Array.isArray(display)
                ? display
                : JSON.parse(display));
        };

        WelcomeKitEmbed.prototype.locale = function (locale) {
            return (this.options.locale = locale);
        };

        WelcomeKitEmbed.prototype.website = function (websiteReference) {
            return (this.options.website = websiteReference);
        };

        WelcomeKitEmbed.prototype.render = function (options) {
            return this.fetch(this.renderWidget);
        };

        WelcomeKitEmbed.prototype.fetch = function (cb) {
            var request;
            request = new XMLHttpRequest();
            request.open(
                "GET",
                this.options.apiHost +
                    "/api/v1/embed?organization_reference=" +
                    this.reference,
                true
            );
            request.onload = function () {
                if (request.status >= 200 && request.status < 400) {
                    return cb(JSON.parse(request.responseText));
                } else {
                    return console.log("Fail to load WTTJ widget");
                }
            };
            request.onerror = function () {
                return console.log("Fail to load WTTJ widget");
            };
            return request.send();
        };

        WelcomeKitEmbed.prototype.truncate = function (str, num) {
            if (str.length <= num) {
                return str;
            }
            return str.slice(0, num) + "...";
        };

        WelcomeKitEmbed.prototype.unique = function (array) {
            var set;
            set = new Set(array);
            return Array.from(set);
        };

        WelcomeKitEmbed.prototype.renderOfficeCities = function (job) {
            var cities;
            if (job.offices) {
                cities = this.unique(
                    job.offices.map(
                        (function (_this) {
                            return function (office) {
                                return office.city;
                            };
                        })(this)
                    )
                );
                return this.truncate(cities.join(", "), 40);
            } else if (job.office) {
                return job.office.city;
            } else {
                return "";
            }
        };

        WelcomeKitEmbed.prototype.renderOfficeCountries = function (job) {
            var countries;
            if (job.offices) {
                countries = this.unique(
                    job.offices.map(
                        (function (_this) {
                            return function (office) {
                                return office.country[_this.options.locale];
                            };
                        })(this)
                    )
                );
                return this.truncate(countries.join(", "), 40);
            } else if (job.office) {
                return job.office.country[this.options.locale];
            } else {
                return "";
            }
        };

        WelcomeKitEmbed.prototype.renderWidget = function (data) {
            var foundDepartments,
                foundOffices,
                job,
                k,
                l,
                len,
                len1,
                office,
                ref,
                ref1;
            this.data = data;
            foundDepartments = [];
            foundOffices = [];
            if (this.data.jobs.length === 0) {
                return this.$container().appendChild(this.renderNothing());
            }
            ref = this.data.jobs;
            for (k = 0, len = ref.length; k < len; k++) {
                job = ref[k];
                if (
                    job.department &&
                    foundDepartments.indexOf(job.department.id) === -1
                ) {
                    foundDepartments.push(job.department.id);
                    this.departments.push(job.department);
                }
                ref1 = job.offices;
                for (l = 0, len1 = ref1.length; l < len1; l++) {
                    office = ref1[l];
                    if (foundOffices.indexOf(office.id) === -1) {
                        foundOffices.push(office.id);
                        this.offices.push(office);
                    }
                }
            }
            if (this.options.group === "office") {
                return this.renderOffices();
            } else if (this.options.group === "department") {
                return this.renderDepartments();
            } else {
                return this.$container().appendChild(
                    this.renderJobs(data.jobs.slice(0, 3))
                );
            }
        };

        WelcomeKitEmbed.prototype.$container = function () {
            return this._container != null
                ? this._container
                : (this._container =
                      document.getElementById("welcomekit-embed"));
        };

        WelcomeKitEmbed.prototype.renderDepartments = function () {
            var container, department, k, len, sorted;
            container = document.createElement("div");
            container.className = this.classPrefix + "departments";
            sorted = this.departments.sort(function (a, b) {
                if (a.name < b.name) {
                    return -1;
                }
                if (a.name > b.name) {
                    return 1;
                }
                return 0;
            });
            for (k = 0, len = sorted.length; k < len; k++) {
                department = sorted[k];
                container.appendChild(this.renderDepartment(department));
            }
            return this.$container().appendChild(container);
        };

        WelcomeKitEmbed.prototype.renderDepartment = function (department) {
            var job, jobs, tag, title;
            tag = document.createElement("div");
            tag.className = this.classPrefix + "department";
            if (department.name) {
                title = document.createElement("h2");
                title.className = this.classPrefix + "department-name";
                title.innerHTML = department.name;
                tag.appendChild(title);
            }
            jobs = function () {
                var k, len, ref, results;
                ref = this.data.jobs;
                results = [];
                for (k = 0, len = ref.length; k < len; k++) {
                    job = ref[k];
                    if (job.department && job.department.id === department.id) {
                        results.push(job);
                    }
                }
                return results;
            }.call(this);
            tag.appendChild(this.renderJobs(jobs));
            return tag;
        };

        WelcomeKitEmbed.prototype.renderOffices = function () {
            var cities, city, container, k, len, sorted;
            container = document.createElement("div");
            container.className = this.classPrefix + "offices";
            cities = this.offices.map(
                (function (_this) {
                    return function (o) {
                        return o.city;
                    };
                })(this)
            );
            sorted = this.unique(cities).sort();
            for (k = 0, len = sorted.length; k < len; k++) {
                city = sorted[k];
                container.appendChild(this.renderCity(city));
            }
            return this.$container().appendChild(container);
        };

        WelcomeKitEmbed.prototype.renderCity = function (city) {
            var job, jobs, tag, title;
            tag = document.createElement("div");
            tag.className = this.classPrefix + "office";
            if (city) {
                title = document.createElement("h2");
                title.className = this.classPrefix + "office-city";
                title.innerHTML = city;
                tag.appendChild(title);
            }
            jobs = function () {
                var k, len, ref, results;
                ref = this.data.jobs;
                results = [];
                for (k = 0, len = ref.length; k < len; k++) {
                    job = ref[k];
                    if (
                        job.offices
                            .map(
                                (function (_this) {
                                    return function (o) {
                                        return o.city;
                                    };
                                })(this)
                            )
                            .includes(city)
                    ) {
                        results.push(job);
                    }
                }
                return results;
            }.call(this);
            tag.appendChild(this.renderJobs(jobs));
            return tag;
        };

        WelcomeKitEmbed.prototype.renderJobs = function (jobs) {
            var container, job, k, len, sortedJobs;
            container = document.createElement("ul");
            container.className = this.classPrefix + "jobs-list";
            sortedJobs = jobs.sort(function (a, b) {
                if (a.name < b.name) {
                    return -1;
                }
                if (a.name > b.name) {
                    return 1;
                }
                return 0;
            });
            for (k = 0, len = sortedJobs.length; k < len; k++) {
                job = sortedJobs[k];
                container.appendChild(this.renderJob(job));
            }
            return container;
        };

        WelcomeKitEmbed.prototype.renderJob = function (job) {
            var i, info, infos, j, key, link, name, ref, value;
            j = document.createElement("li");
            j.className = this.classPrefix + "jobs-list-item";
            link = document.createElement("a");
            link.className = this.classPrefix + "jobs-list-item-link";
            link.href = this.jobUrl(job);
            link.target = "_blank";
            name = document.createElement("h3");
            name.className = this.classPrefix + "job-name";
            name.innerHTML = job.name;
            link.appendChild(name);
            j.appendChild(link);
            infos = document.createElement("ul");
            infos.className = this.classPrefix + "job-infos";
            ref = this.options.display;
            for (i in ref) {
                key = ref[i];
                info = document.createElement("li");
                switch (key) {
                    case "description":
                        value = job.description;
                        break;
                    case "department":
                        value = job.department ? job.department.name : "";
                        break;
                    case "officeCity":
                        value = this.renderOfficeCities(job);
                        break;
                    case "officeCountry":
                        value = this.renderOfficeCountries(job);
                        break;
                    case "contractType":
                        value = job.contract_type
                            ? job.contract_type[this.options.locale]
                            : "";
                        break;
                    case "createdAt":
                        value = job.created_at[this.options.locale];
                        break;
                    case "startDate":
                        value = job.start_date
                            ? texts.startDate[this.options.locale] +
                              " " +
                              job.start_date[this.options.locale]
                            : "";
                        break;
                    default:
                        value = null;
                }
                if (value) {
                    info.className = this.classPrefix + "job-" + key;
                    info.innerHTML = value;
                    infos.appendChild(info);
                }
            }
            link.appendChild(infos);
            return j;
        };

        WelcomeKitEmbed.prototype.renderNothing = function () {
            var j;
            j = document.createElement("div");
            j.className = this.classPrefix + "warning";
            j.innerHTML = texts.noJobs[this.options.locale];
            return j;
        };

        WelcomeKitEmbed.prototype.jobUrl = function (job) {
            var websiteToUse;
            if (job.websites_urls.length) {
                websiteToUse = job.websites_urls.filter(
                    (function (_this) {
                        return function (wu) {
                            return (
                                wu.website_reference ===
                                    _this.options.website ||
                                "wk-careers_" + wu.website_reference ===
                                    _this.options.website
                            );
                        };
                    })(this)
                );
                if (websiteToUse.length) {
                    return websiteToUse[0].url;
                } else {
                    return job.websites_urls[0].url;
                }
            } else {
                return this.data.websites[0].root_url;
            }
        };

        return WelcomeKitEmbed;
    })();

    window.WelcomeKitEmbed = WelcomeKitEmbed;
}).call(this);