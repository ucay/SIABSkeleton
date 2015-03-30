set :application, "APP_NAME"
set :user, "root"
set :domain,      "YOUR_SERVER"
set :deploy_to,   "/PATH/TO/DEPLOY"
set :app_path,    "app"

set :repository,  "git@HOST:USERNAME/REPO.git"
set :scm,         :git
set :model_manager, "doctrine"
set :use_sudo, true
set :keep_releases,  3

set :shared_files, ["app/config/parameters.yml"]
set :shared_children, [app_path + "/logs", web_path + "/uploads", "vendor"]
set :use_composer, true
set :update_vendors, true

set :writable_dirs, ["app/cache", "app/logs"]
set :webserver_user, "www-data"
set :permission_method, :chown
set :use_set_permissions, true

set :interactive_mode, false
set :dump_assetic_assets, true
ssh_options[:forward_agent] = true

role :web,           domain
role :app,           domain, :primary => true

logger.level = Logger::DEBUG