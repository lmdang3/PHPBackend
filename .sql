-- This going to go from pdf to .jpeg to base64
CREATE TABLE label_image (
  id CHAR(36) NOT NULL,
  base64_data TEXT,
  PRIMARY KEY (id)
);

