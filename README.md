# aideafirst
aideafirst.com
gcloud config set project ai-agent-repo
gcloud services enable run.googleapis.com cloudbuild.googleapis.com artifactregistry.googleapis.com

gcloud artifacts repositories create aideafirst-repo \
  --repository-format=docker \
  --location=us-east1 \
  --description="Repository for AIdeaFirst website"


gcloud builds submit --tag us-east1-docker.pkg.dev/ai-agent-repo/aideafirst-repo/aideafirst-web:latest .

gcloud run deploy aideafirst-website \
  --image=us-east1-docker.pkg.dev/ai-agent-repo/aideafirst-repo/aideafirst-web:latest \
  --platform=managed \
  --region=us-east1 \
  --allow-unauthenticated


#Running in local
php -S localhost:8000

